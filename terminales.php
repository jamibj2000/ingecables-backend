<?php
$origin = $_SERVER['HTTP_ORIGIN'];
require "access.php";

$APIData = [];

$image = [
    "img/TerminalCrosbyG-416.jpg",
    "img/TerminalCrosbyG-417.jpg"
];

$code = [
    "TerminalCrosbyG-416",
    "TerminalCrosbyG-417"
];

$buttonTitle = [
    "Terminal cónico abierto",
    "Terminal cónico cerrado"
];

$cardTitle = [
    "Terminal cónico abierto Crosby G-416",
    "Terminal cónico cerrado Crosby G-417"
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