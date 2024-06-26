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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <!-- navigatiebalk -->
    <header>
        <nav>
            <ul>
                <li><a href="./index.html"><img src="assets/SDLOGO.png" alt="SD Logo"></a></li>
                <li><a href="./index.html">Home</a></li>
                <li><a href=".//producten.html">Alle Producten</a></li>
                <li><a href="./winkelwagen.html">Mijn winkelmand</a></li>
                <li><a href="php/index.php">Inloggen</a></li>
            </ul>
        </nav>
    </header>
    <!-- /navigatiebalk -->
    <!-- totaal bedrag venster -->
    <div class="bedrag">
        <p1>Samenvatting</p1>
        <hr class="lijn1">
        <p2>Subotaal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;€<br><br>
            BTW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;€</p2>
        <hr class="lijn2">
        <p3>Totaal excl. BTW&nbsp;&nbsp;&nbsp;&nbsp;€</p3>
        <hr class="lijn3">
        <p4>Totaal incl. BTW&nbsp;&nbsp;&nbsp;&nbsp;€</p4>
        <input type="button" class="kopen" value="Doorgaan naar kassa">
        <a href="../src/php/login.php" class="verplicht">Account aanmaken verplicht.</a>
    </div>
    <!-- /totaal bedrag venster -->
</body>
</html>
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

