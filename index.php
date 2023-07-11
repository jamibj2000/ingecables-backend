<?php
require "access.php";
require "carddata.php";
$origin = $_SERVER['HTTP_ORIGIN'];

$APIData = [];

$image = [
    "img/FC6x25F.jpg",
    "img/IWRC6x25F.jpg",
    "img/IWRC6x36COMP.jpg"
];

$code = [
    "FC6x25F",
    "IWRC6x25F",
    "IWRC6x36COMP"
];

$buttonTitle = [
    "6 x 25F + FC",
    "6 x 25F + IWRC",
    "6 x 36 + IWRC Compactado"
];

$cardTitle = [
    "6 x 25F + FC",
    "6 x 25F + IWRC",
    "6 x 36 + IWRC Compactado"
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