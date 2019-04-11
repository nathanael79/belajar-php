<?php

/**
 * Interface MahlukHidup
 */
interface MahlukHidup
{

    public function bernapas(): void;

}

/**
 * Interface MahlukBerbicara
 */
interface MahlukBerbicara extends MahlukHidup
{

    public function berbicara(): void;

}

/**
 * Interface MahlukTerbang
 */
interface MahlukTerbang
{

    public function terbang(): void;

}

/**
 * Class Manusia
 */
class Manusia implements MahlukBerbicara
{

    public function bernapas(): void
    {
        echo "MANUSIA BERNAPAS" . PHP_EOL;
    }

    public function berbicara(): void
    {
        echo "MANUSIA BERBICARA" . PHP_EOL;
    }
}

/**
 * Class Binatang
 */
class Binatang implements MahlukHidup
{

    public function bernapas(): void
    {
        echo "BINATANG BERNAPAS" . PHP_EOL;
    }
}

/**
 * Class BurungKakaTua
 */
class BurungKakaTua extends Binatang implements MahlukBerbicara
{

    public function berbicara(): void
    {
        echo "BURUNG KAKA TUA BERBICARA" . PHP_EOL;
    }
}

/**
 * Class Robot
 */
class Robot implements MahlukTerbang
{

    public function terbang(): void
    {
        echo "ROBOT TERBANG" . PHP_EOL;
    }
}

/**
 * Class Burung
 */
class Burung implements MahlukHidup, MahlukTerbang
{

    public function bernapas(): void
    {
        echo "BURUNG BERNAPAS" . PHP_EOL;
    }

    public function terbang(): void
    {
        echo "BURUNG TERBANG" . PHP_EOL;
    }
}

$manusia = new Manusia();
$binatang = new Binatang();

var_dump($manusia);
var_dump($binatang);

var_dump($manusia instanceof Manusia);
var_dump($manusia instanceof MahlukHidup);
var_dump($manusia instanceof MahlukBerbicara);
var_dump($manusia instanceof Binatang);

var_dump($binatang instanceof Binatang);
var_dump($binatang instanceof MahlukHidup);
var_dump($binatang instanceof MahlukBerbicara);
var_dump($binatang instanceof Manusia);