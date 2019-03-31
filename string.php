<?php

echo 'Eko Kurniawan Khannedy ${name}' . PHP_EOL;

$name = 'Usu';

echo "Eko Kurniawan \nKhannedy $name" . PHP_EOL;

echo <<<END
Nama saya Adalah Eko KUrniawan $name

END;

echo <<<'END'
Shazam!!! $name

END;

echo "Hai ${name}" . PHP_EOL;

echo "Hai " . $name . PHP_EOL;

$keranjang = array("Jeruk", "Apel", "Semangka");

echo "Dikeranjang ada $keranjang[0], $keranjang[1], dan $keranjang[2]" . PHP_EOL;

class People
{
    public $eko = "Eko";
    public $joko = "Joko";
    public $budi = "Budi";
}

$people = new People();

echo "Dirumah ada {$people->eko}, {$people->joko}, dan {$people->budi}" . PHP_EOL;

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;