<?php
require_once __DIR__ . "/Product.php";
class Toy extends Product
{
    function __construct(public string $name, public float $price, public Category $category, public string $material)
    {
        parent::__construct($name, $price, $category);
        $this->material = $material;
    }
}
