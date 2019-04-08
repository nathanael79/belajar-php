<?php

$a = 3 * 3 % 5;
var_dump($a);

$a = 2 ** 30;
var_dump($a);

var_dump("a" <=> "b");
var_dump("b" <=> "b");
var_dump("b" <=> "a");

$name = isset($_GET['name']) ? $_GET['name'] : null;
var_dump($name);

$_GET['name'] = 'Eko Kurniawan Khannedy';

$name = $_GET['name'] ?? null;
var_dump($name);

$address = @$_GET['address'];
var_dump($address);

$my_file = @file('expression.php') or die('File not found');
var_dump($my_file);