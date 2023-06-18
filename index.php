<?php
// $APIData = [
//     "image" => "img/apple.jpg",
//     "code" => "AD4613",
//     "buttonTitle" => "Apple",
//     "content" => [
//         "cardTitle" => "Apple-Templates",
//         "cardTableContent" => "<div></div>"
//     ],
//     "image" => "img/banana.jpg",
//     "code" => "FD4C39",
//     "buttonTitle" => "Banana",
//     "content" => [
//         "cardTitle" => "Banana-Templates",
//         "cardTableContent" => "<div></div>"
//     ],
//     "image" => "img/orange.jpg",
//     "code" => "TD4X25",
//     "buttonTitle" => "Orange",
//     "content" => [
//         "cardTitle" => "Orange-Templates",
//         "cardTableContent" => "<div></div>"
//     ],
// ];
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

$cardTableContent = [];

for ($i = 0; $i < count($image); $i++) {
    array_push($APIData[], [
        "image" => $image[$i],
        "code" => $code[$i],
        "buttonTitle" => $buttonTitle[$i],
        "cardTitle" => $cardTitle[$i],
        "cardTableContent" => $cardTableContent[$i]
    ]);
}

echo json_encode($APIData);