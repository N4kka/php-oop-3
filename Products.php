<?php
//require_once __DIR__ . "/Leash.php";

class Products
{
    public $title;
    public $description;
    public $price;
    public $available = true;

    //use Leash;

    function __construct($_title, $_description, $_price)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->price = $_price;
    }

    public function printInfo()
    {
        return "$this->title $this->description € $this->price";
    }
}
