<?php

trait DisplayAttributes
{

    private function displayLine(): void
    {
        echo("=========================================" . PHP_EOL);
    }

    public function displayAttributes(): void
    {
        $this->displayLine();
        foreach ($this as $attribute => $value) {
            echo(get_class($this) . " with attribute $attribute = $value" . PHP_EOL);
        }
        $this->displayLine();
    }

}

trait DisplayAttributesBigger
{

    private function displayLine(): void
    {
        echo("||||||||||||||||||||||||||||||||||||||||||" . PHP_EOL);
    }

    public function displayAttributes(): void
    {
        $this->displayLine();
        foreach ($this as $attribute => $value) {
            $text = get_class($this) . " with attribute $attribute = $value" . PHP_EOL;
            echo(strtoupper($text));
        }
        $this->displayLine();
    }

}

class Customer
{
    use DisplayAttributes, DisplayAttributesBigger {
        DisplayAttributes::displayLine insteadof DisplayAttributesBigger;
        DisplayAttributesBigger::displayAttributes insteadof DisplayAttributes;
        displayLine as public;
    }

    public $id;
    public $name;
    public $email;
    public $phone;
    public $address;

    public function __construct($id, $name, $email, $phone, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
    }

}

$customer = new Customer(
    "001", "Eko", "eko@ganteng.com", "08213123123123123", "Indonesia"
);

$customer->displayAttributes();
$customer->displayLine();