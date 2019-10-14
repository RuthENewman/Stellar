<?php

// include("./autoload.php");

$baseURL = 'https://images-api.nasa.gov/';

$starQueryURL = $baseURL . 'search?q=star';

$apiKey = getenv("API_KEY");

$curl = curl_init($starQueryURL);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);

if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    exit('Error occured during curl execution. Additional information: ' . var_export($info));
}

curl_close($curl);

$decoded = json_decode($curl_response, true);
$forCollection = $decoded['collection']['items'];

if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    exit('Error occured. Details ' . $decoded->response->errormessage);
}

// foreach($forCollection as $star) {
//     echo $star['links'][0]['href'];
//     echo "\n";
// }

// $image_URL = $forCollection[0]['links'][0]['href'];


var_export($forCollection, true);





