<?php
require_once __DIR__ . "/../Models/Food.php";
require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . "/../Models/Product.php";
require_once __DIR__ . "/../Models/Toy.php";
require_once __DIR__ . "/../Models/Bed.php";


// $crocchette = new Food("crocchette", 5.55, new Category("gatto"), 500);
// var_dump($crocchette);
// $topo = new Toy("topo", 5.55, new Category("gatto"), "plastic");
// var_dump($topo);
// $osso = new Toy("osso", 15, new Category("gatto"), "osso");
// var_dump($osso);


// $products = [
//     $crocchette,
//     $topo,
//     $osso,
// ];
//----------------------------------------------------------------------

$products = [];

$productsArray = [
    "Food" => [
        [
            "name" => "Crocchette 'Purina' per cane adulto",
            "category" => "Cane",
            "weigth" => 1000,
            "price" => 26.99
        ],
        [
            "name" => "Crocchette 'Top Dog' per cane adulto",
            "category" => "Cane",
            "weigth" => 750,
            "price" => 8.49
        ],
        [
            "name" => "Crocchette 'Purina' per gatto adulto",
            "category" => "Gatto",
            "weigth" => 500,
            "price" => 29.99
        ],
        [
            "name" => "Crocchette 'Top Cat' per gatto adulto",
            "category" => "Gatto",
            "weigth" => 250,
            "price" => 11.49
        ]
    ],
    "Bed" => [
        [
            "name" => "Lettino",
            "category" => "Cane",
            "size" => "1000cm X 50cm",
            "price" => 18.49
        ],
        [
            "name" => "Cuccia",
            "category" => "Cane",
            "size" => "1000cm X 50cm",
            "price" => 28.49
        ],
        [
            "name" => "Coperta",
            "category" => "Gatto",
            "size" => "500cm X 300cm",
            "price" => 8.49
        ],
        [
            "name" => "Cuccia",
            "category" => "Gatto",
            "size" => "500cm X 44cm",
            "price" => 16.99
        ]
    ],

    "Toy" => [

        [
            "name" => "Corda",
            "category" => "Cane",
            "material" => "Plastica",
            "price" => 9.99
        ],
        [
            "name" => "Pallina",
            "category" => "Cane",
            "material" => "Plastica",
            "price" => 4.49
        ],
        [
            "name" => "Tiragraffi",
            "category" => "Gatto",
            "material" => "Cartone",
            "price" => 13.49
        ],
        [
            "name" => "Pallina",
            "category" => "Gatto",
            "material" => "Plastica",
            "price" => 5.49
        ]
    ]
];

// foreach ($productsArray as $nameCategory => $productCategory) {
//     foreach ($productCategory as $key => $product) {
//         if ($nameCategory === "Food") {
//             $prod_food = new Food($product["name"], $product["price"], new Category($product["category"]), $product["weigth"]);
//             $products[] = $prod_food;
//         } elseif ($nameCategory === "Bed") {
//             $prod_bed = new Bed($product["name"], $product["price"], new Category($product["category"]), $product["size"]);
//             $products[] = $prod_food;
//         } elseif ($nameCategory === "Toy") {
//             $prod_toy = new Toy($product["name"], $product["price"], new Category($product["category"]), $product["material"]);
//             $products[] = $prod_food;
//         }
//     }
// }
