<?php 
//Your mpesa api keys
$consumerKey = "guDQh0KABFx3c16F86UeL2zcGTcMWxYbplYiMSP0r5LKt44S";
$consumerSecret = "ZKY1cLNJGUOSkYTKQsQC9vYu9OPDluWT2IuGb6exwDTcyOMUOLrGEJeF9xxzMRm5";

//Access token url- get on your apis tab under authorization tab.
$access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

//Intiating curl request
$headers = ['Content-Type:application/json; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$result = json_decode($result);
echo $access_token = $result->access_token;
curl_close($curl);