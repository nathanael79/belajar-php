<?php

class Person
{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return "Person with name {$this->name}";
    }

    public function __invoke(...$parameters)
    {
        var_dump($parameters);
    }

}

$person = new Person("Eko");
echo $person . PHP_EOL;

$person("Hai", "Bro!");