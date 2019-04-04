<?php

$a = 10;

function Hi()
{
    static $b = 11;
    echo $GLOBALS['a'];
}

Hi();

function Test()
{
    static $b = 0;
    echo $b . PHP_EOL;
    $b++;
}

Test();
Test();
Test();
Test();
Test();
Test();