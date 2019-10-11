<?php

$baseURL = 'https://images-api.nasa.gov/';

$starQueryURL = $baseURL . 'search?q=star';

$apiKey = 'gNNpKuoYlIteOC95WhIflG9hBJ44fCQqkwBi0Zcr';

$curl = curl_init($service_url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    exit('Error occured during curl execution. Additional information: ' . var_export($info));
}

curl_close($curl);
$decoded = json_decode($curl_response);
if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    exit('Error occured. Details ' . $decoded->response->errormessage);
}
echo 'Response OK!';
var_export($decoded->response);

// $response = get_contents($starQueryURL);

$forCollection = $response['collection']['items']; // 100 hits



