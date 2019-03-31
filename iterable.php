<?php

function loop(iterable $iterable)
{
    foreach ($iterable as $value) {
        echo $value . PHP_EOL;
    }
}

function getNames(): iterable
{
    yield "Eko";
    yield "Kurniawan";
    yield "Khannedy";
}

loop([1, 2, 3, 4, 5, 6]);
loop(getNames());