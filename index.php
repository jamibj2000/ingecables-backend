<?php
$origin = $_SERVER['HTTP_ORIGIN'];
require "access.php";
require "carddata.php";

$APIData = [];

$image = [
    "img/FC6x25F.jpg",
    "img/IWRC6x25F.jpg",
    "img/orange.jpg"
];

$code = [
    "FC6x25F",
    "IWRC6x25F",
    "TD4X25"
];

$buttonTitle = [
    "6 x 25F + FC",
    "Banana",
    "Orange"
];

$cardTitle = [
    "6 x 25F + FC",
    "6 x 25F + IWRC",
    "Orange-template"
];

for ($i = 0; $i < count($image); $i++) {
    array_push($APIData, [
        "image" => $image[$i],
        "code" => $code[$i],
        "buttonTitle" => $buttonTitle[$i],
        "title" => $cardTitle[$i],
        "content" => $cardData[$i]
    ]);
}

echo json_encode($APIData);