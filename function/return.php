<?php

class Person
{

    public $name;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

}

/**
 * Create new Person
 * @param string $name
 * @return Person
 */
function newPerson(string $name): Person
{
    return new Person($name);
}

$person = newPerson("Eko");
var_dump($person);

function tuple($first, $second)
{
    return array($first, $second);
}

list($first, $second) = tuple("EKo", "Kurniawan");
var_dump($first);
var_dump($second);