<?php

if (!empty($_POST))
{
	echo '<h2>POST IS EMPTY</h2>';
}
?>



<?php


//extract data from the post

extract($_POST);

 

//set POST variables
$url = "https://app." . $_SERVER['HTTP_HOST'] . "/api/is-sign-up-allowed";


$fields = array(

        'email' => urlencode($email),
		'type' => urlencode('free')

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




if($body == 'False' ){
	
	echo 1;
} else {
	
	echo 0;
	
}



//close connection

curl_close($ch);

?>