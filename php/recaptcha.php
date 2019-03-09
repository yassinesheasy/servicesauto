<?php

/**
 * Google recaptcha server side check
 */

$captcha;

if ( isset($_POST['g-recaptcha-response']) ) {
    $captcha = $_POST['g-recaptcha-response'];
}

if( !$captcha ){
    $response = array (
        'status' => 'error',
        'info' => 'Please check the the captcha form.'
    );
    echo json_encode($response);
    exit;
}

$secretKey = "6LcTaX8UAAAAADkbTG7orfO4RzXZ1xGD2-UT01nW";

$ip = $_SERVER['REMOTE_ADDR'];

$googleResponse =  file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);

$responseKeys = json_decode($googleResponse,true);

if(intval($responseKeys["success"]) !== 1) {
    $response = array (
        'status' => 'spam',
        'info' => 'You look like a spam.'
    );
    echo json_encode($response);
    exit;
} else {
    $response = array (
        'status' => 'success',
        'info' => 'You\'re good to go.'
    );
    echo json_encode($response);
    exit;
}

?>
