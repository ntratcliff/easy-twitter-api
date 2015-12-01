<?php

require 'tmhOAuth/tmhOAuth.php';
include 'config.php';

$tmhOAuth = new tmhOAuth($oAuthKeys);

//get api request data
$request_data = array_slice($_GET, 1);

//make a request to the Twitter api
$tmhOAuth->request(
    'GET', 
    $tmhOAuth->url('1.1/'.$_GET['request']),
    $request_data
);

//get response and echo
$response = $tmhOAuth->response;
echo $response['response'];

?>