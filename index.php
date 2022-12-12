<?php
require_once __DIR__ . "/DataBase/db.php";
require_once __DIR__ . "/Models/Pruduct.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/UnderCategory.php";

foreach ($products as $productItem) {
    $name = $productItem["name"];
    $category = $productItem["category"];
    $under_category = $productItem["under_category"];
    $size = $productItem["size"];
    $price = $productItem["price"];

    $new_category = new Category($category);
    $new_under_category = new UnderCategory($under_category);
    $new_product = new Product($name, $new_category, $new_under_category, $size, $price);
}
