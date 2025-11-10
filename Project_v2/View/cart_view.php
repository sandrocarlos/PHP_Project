<?php
require_once('../Model/cart_model.php');

$items = get_cart_items();
$total = 0;

foreach ($items as $item) {
    $total += $item['price'] * $item['qty'];
}

$tax = $total * 0.05;
$shipping = $total * 0.10;
$order_total = $total + $tax + $shipping;
?>
<html>
<head>
    <title>Alex Wiley - Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Your Shopping Cart</h2>
    <?php if (count($items) > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
                <th>Remove from Cart</th>
            </tr>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['qty']; ?></td>
                    <td>$<?php echo number_format($item['price'], 2); ?></td>
                    <td>$<?php echo number_format($item['price'] * $item['qty'], 2); ?></td>
                    <td>
                        <a href="../Controller/cart_controller.php?action=remove&id=<?php echo $item['id']; ?>">Remove</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <h3>
            Items Total: $<?php echo number_format($total, 2); ?><br>
            Tax (5%): $<?php echo number_format($tax, 2); ?><br>
            Shipping (10%): $<?php echo number_format($shipping, 2); ?><br>
            <strong>Order Total: $<?php echo number_format($order_total, 2); ?></strong>
        </h3>
        <a href="display_products.php">Continue Shopping</a> |
        <a href="../Controller/cart_controller.php?action=clear">Check Out</a>
    <?php else: ?>
        <p>Your cart is empty.</p>
        <a href="display_products.php">Back to Catalog</a>
    <?php endif; ?>
</body>
</html>
