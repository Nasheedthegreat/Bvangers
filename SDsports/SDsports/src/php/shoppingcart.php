<?php
session_start();

// Controleer of de winkelwagen al bestaat, zo niet, maak er een aan
if (!isset($_SESSION['winkelwagen'])) {
    $_SESSION['winkelwagen'] = array();
}

// Functie om een item aan de winkelwagen toe te voegen
function addToCart($product) {
    $_SESSION['winkelwagen'][] = $product;
}

// Functie om de inhoud van de winkelwagen te tonen
function showCart() {
    if (empty($_SESSION['winkelwagen'])) {
        echo "De winkelwagen is leeg.";
    } else {
        echo "Inhoud van de winkelwagen:<br>";
        foreach ($_SESSION['winkelwagen'] as $product) {
            echo $product . "<br>";
        }
    }
}

// Voorbeeldgebruik:
addToCart("Product 1");
addToCart("Product 2");
addToCart("Product 3");

showCart();
?>