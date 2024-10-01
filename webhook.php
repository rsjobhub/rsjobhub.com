<?php
require 'stripe/autoload.php';
require 'autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51Px9K7GabwbYmxoWcVmewMik41ncLce8DXVvJNAcp6SgR0oUSLziGuPqZu8g0CQ5ejFS1L2xSJ8waAZUjlclWoPS00eQZUwIKC');

// Retrieve the raw body from the request
$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
$endpoint_secret = 'whsec_Hb5Cg5oIA5IgThjAqibaWdcy2KZgARr1'; // Your webhook secret

try {
    // Verify the webhook signature
    $event = \Stripe\Webhook::constructEvent($payload, $sig_header, $endpoint_secret);
} catch(\UnexpectedValueException $e) {
    // Invalid payload
    http_response_code(400);
    exit();
} catch(\Stripe\Exception\SignatureVerificationException $e) {
    // Invalid signature
    http_response_code(400);
    exit();
}

// Handle the event
switch ($event->type) {
    case 'checkout.session.completed':
        $session = $event->data->object;
        $customerEmail = $session->customer_details->email;
        $paymentIntent = $session->payment_intent;
        $subscriptionId = $session->id;
        $amountPaid = $session->amount_total;

        $users = new User;
        $user = $users->where('users','email',$customerEmail);
        $subscription_type = '';
        if($amountPaid==1500){
            $subscription_type = '3 Months';
        }elseif($amountPaid==2700){
            $subscription_type = '6 Months';
        }else{
            $subscription_type = '12 Months';
        }
        $data = [
            'user_uin'=>$user[0]['uin'],
            'subscription_type'=>$subscription_type,
            'subscription_id'=>$subscriptionId,
            'status'=>'subscribed',
            'price'=>$amountPaid
        ];
        $users->insertData('subscriptions',$data);



       



        // Store initial subscription payment in the database
        // Example:
        // $db->query("INSERT INTO payments (email, payment_intent) VALUES ('$customerEmail', '$paymentIntent')");

        break;

    case 'invoice.payment_succeeded':
        $invoice = $event->data->object; // Contains invoice info
        $subscriptionId = $invoice->subscription;
        $customerEmail = $invoice->customer_email;
        $amountPaid = $invoice->amount_paid;

        // Store the recurring payment info in the database
        // Example:
        // $db->query("INSERT INTO payments (email, subscription_id, amount_paid, status) VALUES ('$customerEmail', '$subscriptionId', '$amountPaid', 'completed')");

        break;

    case 'invoice.payment_failed':
        $invoice = $event->data->object; // Contains invoice info
        $subscriptionId = $invoice->subscription;
        $customerEmail = $invoice->customer_email;

        // Handle failed payment, notify customer, update status
        // Example:
        // $db->query("UPDATE payments SET status = 'failed' WHERE subscription_id = '$subscriptionId'");

        break;

    // Handle other events as needed
}

http_response_code(200);
