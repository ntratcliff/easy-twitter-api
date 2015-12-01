<?php

//api ref. https://dev.twitter.com/rest/reference/get/statuses/mentions_timeline

header('Content-Type: application/json');
include '../config.php';

$tmhOAuth = new tmhOAuth($oAuthKeys);

//get parameters from url
$params = array(
    'count' => $_GET('count');
    'since_id' => $_GET('since_id');
    'max_id' => $_GET('max_id');
    'trim_user' => $_GET('trim_user');
    'contributor_details' => $_GET('contributor_details');
    'include_entities' => $_GET('include_entities');
);

//make a request to the Twitter api
$tmhOAuth->request(
    'GET', 
    $tmhOAuth->url('1.1/statuses/mentions_timeline'),
    $params
);

//get response and echo
$response = $tmhOAuth->response;
echo $response['response'];

?>