<?php

class Person
{

}

class Animal
{

}

$person = new Person();
$animal = new Animal();

var_dump($person instanceof Person);
var_dump($person instanceof Animal);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Person);