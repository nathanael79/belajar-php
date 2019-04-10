<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function sayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}

$function = "foo";
$function();

$function = "sayHello";
$function("Eko");

class Person
{

    function sayHello($name)
    {
        echo "Hello $name" . PHP_EOL;
    }

}

$person = new Person();
$person->$function("Eko");

class Helper
{

    static function sayHello($name)
    {
        echo "Hello $name" . PHP_EOL;
    }

}

Helper::$function("Eko");