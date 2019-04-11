<?php

class Person
{

    public $name;

    public function __clone()
    {
        $person = new Person();
        $person->name = $this->name;
        return $person;
    }

}

$person1 = new Person();
$person1->name = "Eko";

$person2 = clone $person1;

var_dump($person1);
var_dump($person2);