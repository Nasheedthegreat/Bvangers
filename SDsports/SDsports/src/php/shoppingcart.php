// Remove unnecessary opening and closing PHP tags
<?php 
// Add the link to the winkelmand.css stylesheet
session_start();
echo '<link rel="stylesheet" type="text/css" href="./winkelmand.css">';

session_start();

// Check if the shopping cart already exists, if not, create one
if (!isset($_SESSION['winkelwagen'])) {
    $_SESSION['winkelwagen'] = [];
}

// Function to add an item to the shopping cart
function addToCart($product, $quantity = 1) {
    if (isset($_SESSION['winkelwagen'][$product])) {
        $_SESSION['winkelwagen'][$product] += $quantity;
    } else {
        $_SESSION['winkelwagen'][$product] = $quantity;
    }
}

// Function to remove an item from the shopping cart
function removeFromCart($product, $quantity = 1) {
    if (isset($_SESSION['winkelwagen'][$product])) {
        $_SESSION['winkelwagen'][$product] -= $quantity;
        if ($_SESSION['winkelwagen'][$product] <= 0) {
            unset($_SESSION['winkelwagen'][$product]);
        }
    }
}

// Function to clear the shopping cart
function clearCart() {
    $_SESSION['winkelwagen'] = [];
}

// Function to get the total number of items in the shopping cart
function getCartItemCount() {
    return array_sum($_SESSION['winkelwagen']);
}

// Function to get the total price of items in the shopping cart
function getCartTotalPrice() {
    $totalPrice = 0;
    // Replace with your own logic to calculate the total price based on product prices
    foreach ($_SESSION['winkelwagen'] as $product => $quantity) {
        $totalPrice += $quantity * getProductPrice($product);
    }
    return $totalPrice;
}

// Function to get the price of a product
function getProductPrice($product) {
    // Replace with your own logic to retrieve the price of a product
    // For example, you can query a database or use a predefined price list
    $priceList = [
        'Product 1' => 10.99,
        'Product 2' => 19.99,
        'Product 3' => 5.99
    ];
    return $priceList[$product] ?? 0;
}

// Function to display the contents of the shopping cart
function showCart() {
    if (empty($_SESSION['winkelwagen'])) {
        echo "De winkelwagen is leeg.";
    } else {
        echo "Inhoud van de winkelwagen:<br>";
        foreach ($_SESSION['winkelwagen'] as $product => $quantity) {
            echo $product . " (Aantal: " . $quantity . ")<br>";
        }
        echo "Totaal aantal items: " . getCartItemCount() . "<br>";
        echo "Totaalprijs: " . getCartTotalPrice() . "<br>";
    }
}

// Example usage:
addToCart("Product 1", 2);
addToCart("Product 2");
addToCart("Product 3");

removeFromCart("Product 1", 1);

showCart();
{
    $_SESSION['winkelwagen'] = [];
}
session_start();

// Add the link to the winkelmand.css stylesheet
echo '<link rel="stylesheet" type="text/css" href="../winkelmand.css">';

// Rest of the code...

// Remove unnecessary opening and closing PHP tags

