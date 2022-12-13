<?php
class Product
{
    public $name;
    public $category;
    public $under_category;
    public $size;
    private $price;

    function __construct(String $name, String $category, String $under_category, $size, float $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->under_category = $under_category;
        $this->size = $size;
        $this->price = $price;
    }

    function getPrice()
    {
        return $this->price;
    }
}
