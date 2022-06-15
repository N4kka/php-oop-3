<?php

require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Games.php";
require_once __DIR__ . "/Kennels.php";
require_once __DIR__ . "/User.php";

$food = new Food("Croccantini", "Royal Canin", 100 . '€', "Manzo");

$games = new Games("Palla", "Gioco robusto per allenare i denti del cane", 20 . '€', "plastica");

$kennels = new Kennels("Cuccia", "Comodissima cuccia per far dormire il tuo cane in totale serenità e comodità", 150 . '€', "Pelle scamosciata");

$nicola = new User("Nicola", "sarlinicola7@gmail.com", "pincopallino");
$nicola->printInfo('20', '193cm');
$nicola->addProductToCart($food);
$nicola->addProductToCart($kennels);

$giochi->available = false;

try {
    $nicola->addProductToCart($games);
} catch (Exception $e) {
    echo "This is an exception: this product is currently not available";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
</head>

<body>

    <h1> <?php echo $nicola->printInfo(); ?> </h1>

    <h2>Prodotti per animali</h2>
    <ul>
        <li> <?php echo 'PetFood: ' . $food->printInfo(); ?> </li>
        <li> <?php echo 'PetGames: ' . $games->printInfo(); ?> </li>
        <li> <?php echo 'PetKennels: ' . $kennels->printInfo(); ?> </li>
    </ul>

    <h2>Ciao <?php echo "These are user's info" . $nicola->name ?>, questo é il tuo carrello</h2>
    <ul>
        <?php foreach ($nicola->cart as $cartProducts) { ?>
            <li> <?php echo $cartProducts->printInfo(); ?> </li>
        <?php } ?>
    </ul>
    <h3>Totale: € <?php echo $nicola->getTotalPrice(); ?> </h3>

</body>

</html>