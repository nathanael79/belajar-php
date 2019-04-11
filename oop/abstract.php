<?php

abstract class Factory
{

    abstract function build(): string;

    public function makeOne()
    {
        return $this->build();
    }

}

class GarmenFactory extends Factory
{

    function build(): string
    {
        return "GARMEN";
    }
}

var_dump((new GarmenFactory())->makeOne());