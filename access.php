<?php
$allowedOrigins = array(
    'http://127.0.0.1:5500',
    'http://ingecables.netlify.app'
);

$origin = $_SERVER['HTTP_ORIGIN'];

if (in_array($origin, $allowedOrigins)) {
    header('Access-Control-Allow-Origin: ' . $origin);
}