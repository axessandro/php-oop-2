<?php
require_once __DIR__ . "/DataBase/db.php";
require_once __DIR__ . "/Models/Pruduct.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/UnderCategory.php";

foreach ($products as $productItem) {
    $name = $productItem->name;
    $category = $productItem->category;
    $under_category = $productItem->under_category;
    $size = $productItem->size;
    $price = $productItem->price;

    $item = new Product($name, $category, $under_category, $size, setPrice($price));
}
