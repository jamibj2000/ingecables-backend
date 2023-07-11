<?php
$origin = $_SERVER['HTTP_ORIGIN'];
require "access.php";

$APIData = [];

$image = [
    "img/Templadorcableacero.jpg",
    "img/TempladorOjo-Quijada.jpg",
    "img/TempladorQuijada-Quijada.jpg",
    "img/TempladorinoxidableOjo-Gancho.jpg",
    "img/TempladorhierroOjo-Gancho.jpg",
];

$code = [
    "Templadorcableacero",
    "TempladorOjo-Quijada",
    "TempladorQuijada-Quijada",
    "TempladorinoxidableOjo-Gancho",
    "TempladorhierroOjo-Gancho",
];

$buttonTitle = [
    "Templador para Ojo-ojo",
    "Templador para Ojo-Quijada",
    "Templador para Quijada-Quijada",
    "Templador para inoxidable Ojo-Gancho",
    "Templador para hierro Ojo-Gancho",
];

$cardTitle = [
    "Templador para cable de acero forjado Ojo-Ojo",
    "Templador para cable de acero forjado Ojo-Quijada",
    "Templador para cable de acero forjado Quijada-Quijada",
    "Templador para cable de acero inoxidable Ojo-Gancho",
    "Templador para cable de acero hierro Ojo-Gancho",
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