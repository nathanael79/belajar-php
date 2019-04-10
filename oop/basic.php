<?php

class Helper
{

    function a()
    {
        if (isset($this)) {
            return "OK";
        } else {
            return "KO";
        }
    }

}

var_dump(Helper::a());

$helper = new Helper();
var_dump($helper->a());

class Foo
{

    public $bar;

    /**
     * Foo constructor.
     */
    public function __construct()
    {
        $this->bar = function () {
            return "BAR";
        };
    }

}

$foo = new Foo();
var_dump($foo->bar);
var_dump(($foo->bar)());
var_dump(Foo::class);

class Animal
{

    public $gender;

}

class Cat extends Animal
{

    public $name;

}

$cat = new Cat();
$cat->name = "Empus";
$cat->gender = "Male";

var_dump($cat);