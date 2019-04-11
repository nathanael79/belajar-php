<?php

class A
{

    public static function who()
    {
        return __CLASS__;
    }

    public static function test()
    {
        return static::who();
    }

}

class B extends A
{

    public static function who()
    {
        return __CLASS__;
    }

}

var_dump(B::test());