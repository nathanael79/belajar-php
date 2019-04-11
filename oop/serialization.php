<?php

class Category
{

    public $name;

}

$category = new Category();
$category->name = "Handphone";

$result = serialize($category);
var_dump($result);

$category_result = unserialize($result);
var_dump($category_result);