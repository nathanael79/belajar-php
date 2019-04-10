<?php

$i = 0;

while ($i < 10) {
    echo "Iteration-$i" . PHP_EOL;
    $i++;
}

echo "BREAK" . PHP_EOL;

$i = 0;

do {
    echo "Iteration-$i" . PHP_EOL;
    $i++;
} while ($i < 10);