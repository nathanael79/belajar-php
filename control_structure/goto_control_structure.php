<?php

$i = 0;


program:
echo "Iteration - $i" . PHP_EOL;


$i++;

if ($i < 10) {
    goto program;
}