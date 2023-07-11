<?php
$origin = $_SERVER['HTTP_ORIGIN'];
require "access.php";

$APIData = [];

$image = [
    "img/GrilleteliraG-209.jpg",
    "img/GrilleteliraG-209A.jpg",
    "img/GrilleteliraG-2130.jpg",
];

$code = [
    "GrilleteliraG-209",
    "GrilleteliraG-209A",
    "GrilleteliraG-2130",
];

$buttonTitle = [
    "Grillete lira G-209",
    "Grillete lira G-209A",
    "Grillete lira G-2130",
];

$cardTitle = [
    "Grillete lira grado 6 con pasador  cabeza plana G-209",
    "Grillete lira Grado 8 con pasador cabeza plana G-209A",
    "Grillete lira grado 6 con pasador tuerca G-2130",
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