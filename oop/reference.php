<?php

class Car
{

    public $year;

}

function changeYearToNow(Car $car)
{
    $car->year = 2019;

    $car = new Car();
    $car->year = 2000;
}

$car = new Car();
$car->year = 2010;

var_dump($car);

changeYearToNow($car);

var_dump($car);
