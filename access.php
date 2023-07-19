<?php
$allowedOrigins = array(
    'http://127.0.0.1:5500',
    'http://127.0.0.1:5501',
    'https://ingecables-starlight-test.netlify.app',
    'https://ingecables.netlify.app'
);

$origin = $_SERVER['HTTP_ORIGIN'];

if (in_array($origin, $allowedOrigins)) {
    header('Access-Control-Allow-Origin: ' . $origin);
}