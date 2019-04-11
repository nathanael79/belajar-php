<?php

class Table
{

    private $data = [];

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __call($name, $arguments)
    {
        $json = json_encode($arguments);
        return "Call method $name with arguments $json" . PHP_EOL;
    }

}

$table = new Table();
$table->id = "001";
$table->first_name = "Eko Kurniawan";
$table->last_name = "Khannedy";

var_dump($table->id);
var_dump($table->first_name);
var_dump($table->last_name);
var_dump($table);

var_dump($table->save("Eko"));
var_dump($table->saveOrUpdate("0001"));
var_dump($table->remove("0001"));
var_dump($table->findByIdAndFirstName("0001", "Eko Kurniawan"));