<?php

function helloWorld(string $name): string
{
    return "Hello $name";
}

$result = call_user_func("helloWorld", "Eko");

var_dump($result);

$closure = function (int $value) {
    return $value + $value;
};

$range = range(0, 10);

$range = array_map(function ($value) {
    return $value * $value;
}, $range);

array_walk($range, function ($value) {
    echo $value . "\n";
});
