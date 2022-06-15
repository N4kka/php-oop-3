<?php
require_once __DIR__ . "/Products.php";

class Food extends Products
{
    public $food_taste = 'manzo';

    function __construct($_title, $_description, $_price, $_food_taste)
    {
        parent::__construct($_title, $_description, $_price);
        $this->food_taste = $_food_taste;
    }

    public function printInfo()
    {
        return "$this->title $this->description $this->price $this->food_taste";
    }
}
