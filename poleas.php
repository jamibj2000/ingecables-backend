<?php
$origin = $_SERVER['HTTP_ORIGIN'];
require "access.php";

$APIData = [];

$image = [
    "img/PoleascablesPMA.jpg",
];

$code = [
    "PoleascablesPMA",
];

$buttonTitle = [
    "Poleas de cables PMA",
];

$cardTitle = [
    "Poleas para cables de acero Tipo PMA",
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