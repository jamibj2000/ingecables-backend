<?php
$origin = $_SERVER['HTTP_ORIGIN'];
require "access.php";

$APIData = [];

$image = [
    "img/crosbya1328.jpg",
];

$code = [
    "CrosbyA1328",
];

$buttonTitle = [
    "Gancho acortador A-1328",
];

$cardTitle = [
    "Gancho acortador Crosby A-1328",
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