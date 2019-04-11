<?php

class MyClass
{
    public $var1 = "Var1";
    public $var2 = "Var2";
    public $var3 = "Var3";

    protected $var4 = "Var4";
    private $var5 = "Var5";

    public function showAttributes()
    {
        foreach ($this as $key => $value) {
            echo "$key = $value" . PHP_EOL;
        }
    }
}

$myClass = new MyClass();
$myClass->showAttributes();

echo "DISPLAY OUT OF CLASS" . PHP_EOL;

foreach ($myClass as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}

class Person implements IteratorAggregate
{

    public $id;
    public $name;
    public $email;
    public $address;

    public function getIterator()
    {
        return new ArrayIterator([
            $this->name, $this->id, $this->email, $this->address
        ]);
    }
}

$person = new Person();
$person->id = "001";
$person->name = "Eko Keren";
$person->email = "eko@ganteng.com";
$person->address = "Indonesia";

foreach ($person as $value) {
    var_dump($value);
}