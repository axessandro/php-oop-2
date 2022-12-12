<?php
require_once __DIR__ . "/Models/Category.php";

class Product
{
    public $name;
    public $category;
    public $under_category;
    public $size;
    private $price;

    function __construct(String $name, Category $category, UnderCategory $under_category, $size, Int $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->under_category = $under_category;
        $this->size = $size;
    }
}
