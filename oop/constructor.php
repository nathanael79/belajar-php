<?php

class Animal
{

    public $name;

    /**
     * Animal constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "DESTROY ANIMAL" . PHP_EOL;
    }

}

class Cat extends Animal
{

    public $gender;

    /**
     * Cat constructor.
     * @param $name
     * @param $gender
     */
    public function __construct($name, $gender)
    {
        parent::__construct($name);
        $this->gender = $gender;
    }

    public function __destruct()
    {
        parent::__destruct();
        echo "DESTROY CAT" . PHP_EOL;
    }

}


var_dump(new Cat("Empus", "Male"));