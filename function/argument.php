<?php

/**
 *
 * @param int $first
 * @param int $last
 * @return int
 */
function sum(int $first, int $last)
{
    return $first + $last;
}

var_dump(sum(1, 1));

/**
 * Say hello to name
 * @param string $name
 */
function sayHello(string &$name)
{
    $name = "Hello $name";
}

$name = "Eko";
sayHello($name);
var_dump($name);

/**
 * Say HI!
 * @param string $name
 * @param callable $function
 */
function sayHi(string $name, callable $function)
{
    call_user_func($function, "Hello $name");
}

sayHi("Eko", function (string $result) {
    echo($result . PHP_EOL);
});

/**
 * Class Orang
 */
class Orang
{

    /**
     * @var name
     */
    public $name;

    /**
     * Say hello to other Orang
     * @param self $orang
     * @return string
     */
    function sayHello(self $orang): string
    {
        return "Hi {$orang->name}, My Name is {$this->name}";
    }

}

$budi = new Orang();
$budi->name = "Budi";

$eko = new Orang();
$eko->name = "Eko";

var_dump($eko->sayHello($budi));

/**
 * Sum numbers
 * @param int ...$numbers
 * @return int total numbers
 */
function sumNumbers(int ...$numbers): int
{
    $total = 0;
    foreach ($numbers as $value) {
        $total += $value;
    }
    return $total;
}

var_dump(sumNumbers(1, 1, 1, 1, 1, 1, 1, 1, 1, 1));

/**
 * @param int $first
 * @param int $second
 * @return int total first + second
 */
function sumOf(int $first, int $second): int
{
    return $first + $second;
}

var_dump(sumOf(...[1, 1]));