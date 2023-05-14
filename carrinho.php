<?php
session_start();

if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    $cartItems = $_SESSION['cart'];
    foreach($cartItems as $item) {
        echo "Item: " . $item['name'] . "<br>";
        echo "Price: $" . $item['price'] . "<br>";
        echo "Quantity: " . $item['quantity'] . "<br><br>";
    }
} else {
    echo "Your cart is empty.";
}
?>
