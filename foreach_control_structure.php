<?php

$customers = [
    "0001" => "EKo Kurniawan",
    "0002" => "Budi Irawan",
    "0003" => "Dimas Setiadi"
];

foreach ($customers as $customer) {
    var_dump($customer);
}

foreach ($customers as $id => $name) {
    var_dump($id);
    var_dump($name);
}

$customer = array(
    "id" => "0001",
    "name" => array(
        "first_name" => "Eko",
        "last_name" => "Kurniawan"
    ),
    "address" => array(
        "country" => "Indonesia",
        "city" => "Subang"
    )
);

var_dump($customer);