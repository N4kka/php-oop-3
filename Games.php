<?php
require_once __DIR__ . "/Products.php";

class Games extends Products
{
    public $composition = 'Plastica';

    public $available = false;

    function __construct($_title, $_description, $_price, $_composition)
    {
        parent::__construct($_title, $_description, $_price);
        $this->composition = $_composition;
    }

    public function printInfo()
    {
        return "$this->title $this->description $this->price $this->composition";
    }
}
