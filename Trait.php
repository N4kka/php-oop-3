<?php
//require_once __DIR__ . "/Products.php";

trait Extras
{
    public $age = ", 20 anni ";
    public $height = ", 193cm";

    function setInfo($_age, $_height) {
        $this->age = $_age;
        $this->height = $_height;
    }

    function printInfo()
    {
        return "$this->name $this->age $this->height";
    }
}
