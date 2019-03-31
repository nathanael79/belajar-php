<?php

$array = [
    "first_name" => "Eko Kurniawan",
    "last_name" => "Khannedy",
    "address" => [
        "street" => "Jalan Cijoged",
        "city" => "Subang"
    ]
];

$object = (object)$array;

print_r($object);
var_dump($object);

echo $object->first_name . PHP_EOL;
echo $object->last_name . PHP_EOL;
echo $object->address['street'] . PHP_EOL;
echo $object->address['city'] . PHP_EOL;