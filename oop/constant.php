<?php

class Constant
{

    public const FOO = "foo";
    public const BAR = "bar";

    static function fooBar()
    {
        return self::FOO . self::BAR;
    }

}

var_dump(Constant::fooBar());
var_dump(Constant::FOO);
var_dump(Constant::BAR);