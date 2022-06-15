<?php
require_once __DIR__ . "/Products.php";

class Kennels extends Products
{
    public $material = 'Pelle scamosciata';

    function __construct($_title, $_description, $_price, $_material)
    {
        parent::__construct($_title, $_description, $_price);
        $this->food_taste = $_material;
    }

    public function printInfo()
    {
        return "$this->title $this->description $this->price $this->material";
    }
}
