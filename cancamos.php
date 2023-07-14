<?php
$origin = $_SERVER['HTTP_ORIGIN'];
require "access.php";

$APIData = [];

$image = [
    "img/AnillaDIN582.jpg",
    "img/AnillaDIN580.jpg",
    "img/AnillaDINoval.jpg"
];

$code = [
    "AnillaDIN582",
    "AnillaDIN580",
    "AnillaDINoval"
];

$buttonTitle = [
    "Anilla elevación hembra",
    "Anilla elevación macho",
    "Anilla elevación oval",
];

$cardTitle = [
    "Anilla de elevación hembra DIN 582",
    "Anilla de elevación macho DIN 580",
    "Anilla de elevación oval",
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