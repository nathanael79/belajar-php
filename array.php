<?php

$array1 = array(
    "first_name" => "Eko Kurniawan"
);

$array2 = [
    "first_name" => "Khannedy"
];

$array3 = array(
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
);

$array4 = array(
    "foo" => "bar",
    "bar" => "foo",
    100 => -100,
    -100 => 100,
);

$array5 = ["Eko", "Kurniawan", "Khannedy", 9 => "Jibril", "Khannedy"];

var_dump($array1);
var_dump($array2);
var_dump($array3);
var_dump($array4);
var_dump($array5);

echo "$array5[0]" . PHP_EOL;
echo "{$array5{1}}" . PHP_EOL;

function getArray()
{
    return ["Eko", "Kurniawan", "Khannedy"];
}

echo getArray()[0] . PHP_EOL;

// MODIFY ARRAY

$fruits = ["Anggur", "Apel", "Jeruk"];
$fruits[] = "Semangka";
$fruits[] = "Pepaya";

var_dump($fruits);

$person = [];
$person["first_name"] = "Eko Kurniawan";
$person["last_name"] = "Khannedy";

var_dump($person);

unset($person["last_name"]);

var_dump($person);

unset($fruits);

$fruits[] = "Durian";

var_dump($fruits);

$person[] = "Ganteng";
print_r($person);

foreach ($person as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}