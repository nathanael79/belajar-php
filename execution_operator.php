<?php

$output = `ls -lh`;
var_dump($output);

$output = shell_exec('ls -lh');
var_dump($output);