<?php
$origin = $_SERVER['HTTP_ORIGIN'];
require "access.php";

$APIData = [];

$image = [
    "img/SujetacablesG-429.png",
    "img/SujetacablesG-450.jpg",  
    "img/SujetacablesG-460.jpg", 
    "img/SujetacablesG-461.jpg", 
];

$code = [
    "SujetacablesG-429",
    "SujetacablesG-450",
    "SujetacablesG-460",
    "SujetacablesG-461",
];

$buttonTitle = [
    "Sujetacables G-429",
    "Sujetacables G-450",
    "Sujetacables G-460",
    "Sujetacables G-461",
];

$cardTitle = [
    "Sujetacables Crosby G-429",
    "Sujetacables Crosby G-450",
    "Sujetacables Crosby G-460",
    "Sujetacables Crosby G-461",
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