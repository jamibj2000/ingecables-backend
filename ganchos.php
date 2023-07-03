<?php
$origin = $_SERVER['HTTP_ORIGIN'];
require "access.php";

$APIData = [];

$image = [
    "img/crosbya1328.jpg",
    "img/GanchosegS-1316.jpg",
    "img/GanchosegS-1317.jpg",
    "TensorCrosHG-225",
    "TensorCrosHG-223",
];

$code = [
    "CrosbyA1328",
    "GanchosegS-1316",
    "GanchosegS-1317",
    "TensorCrosHG-225",
    "TensorCrosHG-223",
];

$buttonTitle = [
    "Gancho acortador A-1328",
    "Gancho Crosby S-1316",
    "Gancho Crosby S-1317",
    "Tensor Crosby HG-225",
    "Tensor Crosby HG-223",
];

$cardTitle = [
    "Gancho acortador Crosby A-1328",
    "Gancho de seguridad autoblocante Crosby S-1316",
    "Gancho de seguridad autoblocante directo a cadena Crosby S-1317",
    "Tensor Crosby gancho-cáncamo HG-225",
    "Tensor Crosby gancho-gancho HG-223",
];

for ($i = 0; $i < count($image); $i++) {
    array_push($APIData, [
        "image" => $image[$i],
        "code" => $code[$i],
        "buttonTitle" => $buttonTitle[$i],
        "title" => $cardTitle[$i],
    ]);
}

echo json_encode($APIData);