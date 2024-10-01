<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://jsearch.p.rapidapi.com/estimated-salary?job_title=NodeJS%20Developer&location=New-York%2C%20NY%2C%20USA&radius=100",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: jsearch.p.rapidapi.com",
		"x-rapidapi-key: 9d016faf70mshc5550b72390444bp1fe577jsn35e6808b1a30"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

?>