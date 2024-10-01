<?php 

function assignJobCategory($job_title) {
    // Define keywords and their corresponding categories
    $categories = [
        'Accountacy' => ['\baccounting\b', '\bfinance\b', '\bauditor\b', '\bbookkeeping\b', '\btax\b', '\baccounts\b', '\bCPA\b', '\bpayroll\b'],
        'Admin' => ['\badministrative\b', '\badmin\b', '\boffice\b', '\bclerical\b', '\breceptionist\b', '\bsupport\b', '\bsecretarial\b'],
        'Secretariel & PA' => ['\bsecretary\b', '\bpersonal assistant\b', '\bPA\b', '\bexecutive assistant\b', '\bassistant\b', '\bclerical\b'],
        'Architecture' => ['\barchitect\b', '\barchitecture\b', '\bdesign\b', '\burban planning\b', '\bCAD\b', '\bblueprint\b'],
        'Automobile & Motoring' => ['\bautomobile\b', '\bmotor\b', '\bvehicle\b', '\bmechanic\b', '\bautomotive\b', '\bdriving\b', '\brepair\b'],
        'Charity & Voluntary' => ['\bcharity\b', '\bvoluntary\b', '\bnon-profit\b', '\bfundraising\b', '\bNGO\b', '\bcommunity service\b'],
        'Construction & Property' => ['\bconstruction\b', '\bproperty\b', '\breal estate\b', '\bbuilding\b', '\barchitecture\b', '\bsurveying\b'],
        'Customer Service' => ['\bcustomer service\b','\bcustomer\b', '\bcustomer online\b', '\bclient support\b', '\bhelpdesk\b', '\bcall center\b', '\bcustomer care\b', '\bsupport\b'],
        'Education' => ['\beducation\b', '\bteaching\b', '\bschool\b', '\btutoring\b', '\bacademic\b', '\bteacher\b', '\binstructor\b', '\blearning\b'],
        'Energy' => ['\benergy\b', '\boil\b', '\bgas\b', '\brenewable\b', '\bpower\b', '\belectricity\b', '\bmining\b', '\butility\b'],
        'Engineering' => ['\bengineering\b', '\bengineer\b', '\btechnical\b', '\bmechanical\b', '\belectrical\b', '\bcivil\b', '\bsoftware\b'],
        'Environmental' => ['\benvironmental\b', '\becology\b', '\bsustainability\b', '\bconservation\b', '\bgreen\b', '\brecycling\b'],
        'Estate' => ['\bestate\b', '\bproperty\b', '\breal estate\b', '\bbrokerage\b', '\bhousing\b', '\brealty\b', '\bland\b'],
        'Agency' => ['\bagency\b', '\brecruitment\b', '\bplacement\b', '\bheadhunting\b', '\bstaffing\b', '\btalent\b', '\btemp\b'],
        'Financial Services' => ['\bfinance\b', '\bbanking\b', '\binvestment\b', '\bwealth management\b', '\bfinancial advisor\b', '\bsecurities\b'],
        'FMCG' => ['\bfmcg\b', '\bfast moving consumer goods\b', '\bretail\b', '\bconsumer goods\b', '\bsales\b', '\bmarketing\b'],
        'Health & Social Care' => ['\bhealthcare\b', '\bnanny\b', '\bnurse\b', '\bsocial care\b', '\bnursing\b', '\bmedical\b', '\bcaregiver\b', '\bphysician\b', '\btherapy\b'],
        'Hospitality & Catering' => ['\bhospitality\b', '\bcatering\b', '\brestaurant\b', '\bhotel\b', '\bfood service\b', '\bchef\b', '\bbartender\b'],
        'Human Resources' => ['\bhuman resources\b', '\bproject manager\b', '\bhr\b', '\brecruitment\b', '\btalent management\b', '\bemployee relations\b', '\bstaffing\b'],
        'Insurance' => ['\binsurance\b', '\bunderwriting\b', '\brisk management\b', '\bclaims\b', '\bbroker\b', '\bpolicy\b', '\bactuary\b'],
        'IT & Telecoms' => ['\bIT\b', '\btelecoms\b', '\bsoftware\b', '\frontend\b', '\bbackend\b','\btelecom\b', '\binformation technology\b', '\bsoftware\b', '\bnetworking\b', '\btelecommunications\b', '\bdata\b'],
        'Legal' => ['\blegal\b', '\blaw\b', '\bsolicitor\b', '\battorney\b', '\bparalegal\b', '\blitigation\b', '\bcompliance\b'],
        'Leisure & Tourism' => ['\btourism\b', '\bleisure\b', '\btravel\b', '\bhospitality\b', '\brecreation\b', '\bguide\b', '\bresort\b'],
        'Manufacturing' => ['\bmanufacturing\b', '\bproduction\b', '\bfactory\b', '\bassembly\b', '\boperations\b', '\bmachinery\b', '\bfabrication\b'],
        'Marketing & PR' => ['\bmarketing\b', '\bpublic relations\b', '\bPR\b', '\badvertising\b', '\bbranding\b', '\bmedia\b', '\bcampaign\b'],
        'Media' => ['\bmedia\b', '\bjournalism\b', '\bbroadcasting\b', '\bnews\b', '\breporting\b', '\beditor\b', '\bpress\b'],
        'Digital & Creative' => ['\bdigital\b', '\bcreative\b', '\bdesign\b', '\bgraphic design\b', '\bweb design\b', '\bmultimedia\b', '\bcontent creation\b'],
        'NHS Jobs' => ['\bNHS\b', '\bnational health service\b', '\bhealthcare\b', '\bmedical\b', '\bhospital\b', '\bclinic\b', '\bdoctor\b', '\bnurse\b'],
        'Public Sector' => ['\bpublic sector\b', '\bgovernment\b', '\bcivic\b', '\bmunicipal\b', '\bpolicy\b', '\bpublic administration\b'],
        'Recruitment' => ['\brecruitment\b', '\btalent acquisition\b', '\bhiring\b', '\bheadhunting\b', '\bstaffing\b', '\binterview\b'],
        'Religion' => ['\breligion\b', '\bfaith\b', '\bspirituality\b', '\bchurch\b', '\bministry\b', '\breligious\b', '\bchaplain\b'],
        'Retail' => ['\bretail\b', '\bsales\b', '\bstore\b', '\bshop\b', '\bmerchandising\b', '\bcustomer service\b', '\bcashier\b'],
        'Sales' => ['\bsales\b', '\bbusiness development\b', '\baccount manager\b', '\bsales executive\b', '\bselling\b', '\bclient relations\b'],
        'Scientific Security & Safety' => ['\bscientific\b', '\bsecurity\b', '\bsafety\b', '\bresearch\b', '\blab\b', '\bexperiments\b', '\bprotection\b'],
        'Strategy & Consultancy' => ['\bstrategy\b', '\bconsultancy\b', '\badvisory\b', '\bconsultant\b', '\bbusiness strategy\b', '\bplanning\b'],
        'Training' => ['\btraining\b', '\bdevelopment\b', '\beducation\b', '\binstruction\b', '\blearning\b', '\bcoaching\b', '\btrainer\b'],
        'Transport & Logistics' => ['\btransport\b', '\blogistics\b', '\bsupply chain\b', '\bshipping\b', '\bfreight\b', '\bdelivery\b', '\bdistribution\b']
    ];

    // Combine job description and job title for case-insensitive matching
    $combined_text = strtolower($job_title);

    // Check for keywords in the combined text
    foreach ($categories as $category => $patterns) {
        foreach ($patterns as $pattern) {
            if (preg_match("/$pattern/i", $combined_text)) {
                return $category;
            }
        }
    }

    // Default category if no match is found
    return 'General';
}




?>