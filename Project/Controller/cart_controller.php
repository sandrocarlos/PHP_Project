<?php
require_once('../Model/cart_model.php');
require_once('../Model/product_db.php');

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'add':
            // get product from database
            $product = get_product_by_id($_GET['id']);
            if ($product) {
                add_to_cart($product['product_ID'], $product['product_name'], $product['price']);
            }
            header('Location: ../View/display_products.php');
            exit;

        case 'clear':
            clear_cart();
            header('Location: ../View/display_products.php');
            exit;
    }
}
?>
