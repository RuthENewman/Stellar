<?php

// include("./autoload.php");

$baseURL = 'https://images-api.nasa.gov/';

$customQuery = '';

$customQueryURL = $baseURL . 'search?q=' . $customQuery;

$apiKey = getenv("API_KEY");

$curl = curl_init($sunQueryURL);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);

if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    exit('Error occured during curl execution. Additional information: ' . var_export($info));
}

curl_close($curl);

$decoded = json_decode($curl_response, true);
$forSunCollection = $decoded['collection']['items'];

if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    exit('Error occured. Details ' . $decoded->response->errormessage);
}

var_export($forSunCollection, true);