<?php

spl_autoload_register(function ($className) {
    include_once __DIR__ . '/classes/' . $className . '.php';
});

$customer = new Customer();
var_dump($customer);

$product = new Product();
var_dump($product);