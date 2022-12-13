<?php
require_once __DIR__ . "/Product.php";
class Bed extends Product
{
    function __construct(public string $name, public float $price, public Category $category, public string $size)
    {
        parent::__construct($name, $price, $category);
        $this->size = $size;
    }
}
