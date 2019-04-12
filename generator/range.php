<?php

$data = range(0, 100, 2);
var_dump($data);

function xrange($start, $end, $step = 1)
{
    for ($i = $start; $i <= $end; $i += $step) {
        yield $i;
    }
}

$data = xrange(0, 100, 2);
var_dump($data);

foreach ($data as $value) {
    echo $value . PHP_EOL;
}