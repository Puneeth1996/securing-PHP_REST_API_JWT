<?php

$config = require __DIR__ . '/config.php';
require __DIR__ . '/php-jwt-master/src/BeforeValidException.php';
require __DIR__ . '/php-jwt-master/src/ExpiredException.php';
require __DIR__ . '/php-jwt-master/src/SignatureInvalidException.php';
require __DIR__ . '/php-jwt-master/src/JWT.php';
use \Firebase\JWT\JWT;

// set your default time-zone
date_default_timezone_set('Asia/Manila');



echo 'Checking on the secret key';
echo $config['secret-key'];
// variables used for jwt
$key = "example_key";
$iss = "http://example.org";
$aud = "http://example.com";
$iat = 1356999524;
$nbf = 1357000000;
$id = 1;
$firstname = 'puneeth';
$lastname = 'p';
$email = 'puneeth@gmail.com';

$token = array(
    "iss" => $iss,
    "secretKey" => $config['secret-key'],
    "aud" => $aud,
    "iat" => $iat,
    "nbf" => $nbf,
    "data" => array(
        "id" => $id,
        "firstname" => $firstname,
        "lastname" => $lastname,
        "email" => $email
    )
);

http_response_code(200);
$jwt = JWT::encode($token, $key);
echo json_encode(
    array(
        "message" => "Generation of web token.",
        "jwt" => $jwt
    )
);

// if jwt is not empty
if($jwt){

    // if decode succeed, show user details

    // decode jwt
    $decoded = JWT::decode($jwt, $key, array('HS256'));

    // set response code
    http_response_code(200);

    // show user details
    echo json_encode(array(
        "message" => "Access granted.",
        "data" => $decoded->data,
        "all-Data" => $decoded
    ));


    // catch will be here
}


?>