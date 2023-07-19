<?php
$origin = $_SERVER['HTTP_ORIGIN'];
require "access.php";

$APIData = [];

$image = [
    "img/guardacableInox.jpg",
    "img/guardacableReforzado.jpg",
];

$code = [
    "guardacableInox",
    "guardacableReforzado",
];

$buttonTitle = [
    "Guardacable acero inoxidable",
    "Guardacable acero reforzado",
];

$cardTitle = [
    "Guardacable de acero inoxidable G-414-SS",
    "Guardacable de acero reforzado G-414",
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