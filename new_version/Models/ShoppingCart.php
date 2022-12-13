<?php
class ShoppingCart
{
    private $products = [];

    public function add($product)
    {
        $this->products[] = $product;
    }

    // public function getTotal()
    // {
    //     $sum = 0;
    //     foreach ($this->products as $product) {
    //         $sum += $product->price;
    //         return $sum;
    //     }
    // }
}
