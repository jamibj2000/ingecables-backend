<?php
$origin = $_SERVER['HTTP_ORIGIN'];
require "access.php";

$APIData = [];

$image = [
    "img/pastecasSerie500.jpg",
    "img/pastecasSerie700.jpg",
    "img/PastecasSerie900.jpg"
];

$code = [
    "PastecasSerie500",
    "PastecasSerie700",
    "PastecasSerie900"
];

$buttonTitle = [
    "Pastecas Serie 500",
    "Pastecas Serie 700",
    "Pastecas Serie 900"
];

$cardTitle = [
    "Pastecas Serie 500",
    "Pastecas Serie 700",
    "Pastecas Serie 900"
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