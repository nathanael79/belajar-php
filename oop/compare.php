<?php

class Product
{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}

$product1 = new Product("Mie Ayam");
$product2 = new Product("Mie Ayam");

var_dump($product1 == $product2);
var_dump($product1 === $product2);

$product1->name = "Mie Goreng";

var_dump($product1 == $product2);
var_dump($product1 === $product2);

var_dump($product1 === $product1);
var_dump($product2 === $product2);