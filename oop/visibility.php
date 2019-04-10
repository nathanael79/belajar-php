<?php

class Animal
{

    protected $name;

    /**
     * Animal constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}

class Cat extends Animal
{

    private $gender;

    /**
     * Cat constructor.
     * @param $gender
     */
    public function __construct($gender, $name)
    {
        parent::__construct($name);
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    public function sayHello()
    {
        return "Hai, My Name is {$this->name}";
    }

}

$cat = new Cat("Male", "Name");
var_dump($cat);
var_dump($cat->getName());
var_dump($cat->getGender());
var_dump($cat->sayHello());