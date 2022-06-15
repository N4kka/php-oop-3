<?php
require_once __DIR__ . "/Trait.php";

class User
{
    use Extras;

    public $name;
    public $email;
    private $password;
    public $cart = [];

    protected $creditCardExpired = true;

    function __construct($_name, $_email, $_password)
    {
        $this->name = $_name;
        $this->email = $_email;
        $this->password = $_password;
    }

    function addProductToCart($_products)
    {
        if ($_products->available) {
            $this->cart[] = $_products;
            return true;
        } else {
            return false;
        }
    }

    function getTotalPrice()
    {
        $total_price = 0;
        foreach ($this->cart as $item) {
            $total_price += $item->price;
        }
        return $total_price;
    }
}
