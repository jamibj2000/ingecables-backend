<?php
require "access.php";

$APIData = [];

$image = [
    "img/apple.jpg",
    "img/banana.jpg",
    "img/orange.jpg"
];

$code = [
    "AD4613",
    "FD4C39",
    "TD4X25"
];

$buttonTitle = [
    "Apple",
    "Banana",
    "Orange"
];

$cardTitle = [
    "Apple-template",
    "Banana-template",
    "Orange-template"
];

$cardTableContent = [
    "<div>Apple</div>",
    "<div>Banana</div>",
    "<div>Orange</div>"
];

for ($i = 0; $i < count($image); $i++) {
    array_push($APIData, [
        "image" => $image[$i],
        "code" => $code[$i],
        "buttonTitle" => $buttonTitle[$i],
        "cardTitle" => $cardTitle[$i],
        "cardTableContent" => $cardTableContent[$i],
        "origin" => $origin
    ]);
}

echo json_encode($APIData);