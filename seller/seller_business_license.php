
<?php
$input_business_license = $_POST['input_business_license'];
// echo "console.log($input_business_license)";
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/


$ch = curl_init();
// $number="6618700621";
$address="https://business.api.friday24.com/closedown/";
// curl_setopt($ch, CURLOPT_URL, "$address+$number");
curl_setopt($ch, CURLOPT_URL, 'https://business.api.friday24.com/closedown/'.$input_business_license);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Authorization: Bearer Vs3eQYM2vSqeXslIVsJs';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

// echo "$result </br>";

$business_lice=json_decode($result);

// echo $business_lice->bizNum;
echo $business_lice->state;

 ?>