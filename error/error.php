<?php

class PerkalianException extends Exception
{

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}

class PembagianException extends Exception
{

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}

function perkalian($satu, $dua)
{
    if ($satu == 0 || $dua == 0) {
        throw new PerkalianException("Parameter tidak boleh NOL");
    }

    return $satu * $dua;
}

function pembagian($satu, $dua)
{
    if ($satu == 0 || $dua == 0) {
        throw new PembagianException("Parameter tidak boleh NOL");
    }

    return $satu / $dua;
}

try {
    var_dump(perkalian(1, 0));
    var_dump(pembagian(1, 0));
} catch (PerkalianException $exception) {
    echo "PerkalianException dengan pesan " . $exception->getMessage() . PHP_EOL;
} catch (PembagianException $exception) {
    echo "PembagianException dengan pesan " . $exception->getMessage() . PHP_EOL;
} finally {
    echo "Ini selalu dipanggil";
}
