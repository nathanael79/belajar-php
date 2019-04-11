<?php

namespace MyProgram {

    function strtoupper(string $value)
    {
        return "UPPER";
    }

    $value = "Eko";
    var_dump(strtoupper($value));
    var_dump(\strtoupper($value));

}
