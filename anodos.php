<?php
$origin = $_SERVER['HTTP_ORIGIN'];
require "access.php";

$APIData = [];

$image = [
    "img/AnodoszincAmericano.jpg"
];

$code = [
    "AnodoszincAmericano",
];

$buttonTitle = [
    "Anodos de zinc Americano",
];

$cardTitle = [
    "Anodos de zinc Americano",
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