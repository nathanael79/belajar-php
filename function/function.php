<?php

/**
 * Say Hello function
 *
 * @param string $firstName
 * @param string|null $lastName
 * @return string
 */
function sayHello(string $firstName, string $lastName = null)
{
    if ($lastName != null) {
        return "$firstName $lastName";
    } else {
        return $firstName;
    }
}

var_dump(sayHello("Eko"));
var_dump(sayHello("Eko", "Kurniawan"));