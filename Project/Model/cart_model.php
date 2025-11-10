<?php
session_start();

// Add a product by ID
function add_to_cart($id, $name, $price) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (!isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'qty' => 0
        ];
    }

    $_SESSION['cart'][$id]['qty']++;
}

// Return all items in cart
function get_cart_items() {
    return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}

// Clear the cart
function clear_cart() {
    unset($_SESSION['cart']);
}
?>