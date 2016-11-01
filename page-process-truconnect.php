<?php

/* Shouldn't this be if (empty($_POST)) */
if (empty($_POST)) {
	echo '<h2>POST IS EMPTY</h2>';
}
/*if (!empty($_POST))
{
	echo '<h2>POST IS EMPTY</h2>';
}*/
?>



<?php


//extract data from the post

extract($_POST);

 

//set POST variables
$url = "https://app." . $_SERVER['HTTP_HOST'] . "/api/sign-up";


$fields = array(

        'lastName' => urlencode($lastName),

        'firstName' => urlencode($firstName),

        'password' => urlencode($password),

        'type' => urlencode('paid'),

       'preferences[defaultLanguage]' => urlencode('en'),

        'email' => urlencode($email),

        'telephone' => urlencode($telephone),
		
		'cardName' => urlencode($cardName),
		
		'cardNumber' => urlencode($cardNumber),
		
		'expiryDate' => urlencode($expiryDate),
		
		'cvv' => urlencode($cvv),
		
		'address' => urlencode($address),
		
		'city' => urlencode($city),
		
		'state' => urlencode($state),
		
		'zipCode' => urlencode($zipCode),
		
		'merchant' => urlencode('truconn')

        );

 

//url-ify the data for the POST

$fields_string = '';

foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }

rtrim($fields_string, '&');

 

//open connection

$ch = curl_init();

 

//set the url, number of POST vars, POST data

curl_setopt($ch,CURLOPT_URL, $url);

curl_setopt($ch,CURLOPT_POST, count($fields));

curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

 

//curl_setopt($ch, CURLOPT_VERBOSE, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_HEADER, true);

//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);


 

//execute post

//curl_exec($ch);


$response = curl_exec($ch);


$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);

$body = substr($response, $header_size);




$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

print curl_error($ch);

//print_r($result);

//echo 'httpcode is:';

//print_r($httpcode);



if ($httpcode == '409' ){
	header("Location:" . $_SERVER['HTTP_REFERER'] . $_SERVER['PATH_INFO'] . "/user-exists/" );
}  


if ($httpcode == '500'){
	header("Location:" . $_SERVER['HTTP_REFERER'] . $_SERVER['PATH_INFO'] . "/unknown-error/" );
}


if ($httpcode == '200' ){
	header("Location:" . $_SERVER['HTTP_REFERER'] . $_SERVER['PATH_INFO'] . "/paid-membership-success/" );
} 

if($body == 'PaymentFailed' ){
	
	header("Location:" . $_SERVER['HTTP_REFERER'] . $_SERVER['PATH_INFO'] . "/sign-up-success-payment-failure/" );
}



//close connection

curl_close($ch);

?>