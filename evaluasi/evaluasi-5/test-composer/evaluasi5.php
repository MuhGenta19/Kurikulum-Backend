<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('POST','https://api.pondokprogrammer.com/api/student_login', [
    'form_params' => [
            'email' => 'muhammadgentaalam@gmail.com',
            'password' => 'muhammadgenta'
    ]
]);


// echo $response->getStatusCode(); //200
// echo $response->getHeaderLine('content-type');  // 'application / json; charset = utf8 '
$a = json_decode($response->getBody(), true); // '{"id": 1420053, "name": "guzzle", ...}'
// var_dump($a);

$token = $a['token'];
// echo $token;

$response = $client->request('POST','https://api.pondokprogrammer.com/api/class/qr?class_id=85', [
    'headers' => [
            'Authorization' => "bearer $token",
    ]
]);