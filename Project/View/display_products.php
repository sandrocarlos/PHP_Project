<?php
    require_once('../Controller/database_controller.php');
    $product_arr = get_products();
?>
<html>
    <head>
        <title>Product Page</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h2>Product List:</h2>
        <table>
            <tr style="font-size:large;">
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Price</th>
                <th>Last Updated Date</th>
            </tr>
            <?php foreach($product_arr as $product):;?>
                <tr>
                    <td><?php echo $product["product_ID"];?></td>
                    <a href="../Controller/cart_controller.php?action=add&id=<?php echo $product['product_ID']; ?>">Add to Cart</a>
                    <td><?php echo $product["product_name"];?></td>
                    <a href="../Controller/cart_controller.php?action=add&id=<?php echo $product['product_ID']; ?>">Add to Cart</a>
                    <td><?php echo $product["description"];?></td>
                    <a href="../Controller/cart_controller.php?action=add&id=<?php echo $product['product_ID']; ?>">Add to Cart</a>
                    <td><?php echo $product["price"];?></td>
                    <a href="../Controller/cart_controller.php?action=add&id=<?php echo $product['product_ID']; ?>">Add to Cart</a>
                    <td><?php echo $product["updated_dt"];?></td>
                    <a href="../Controller/cart_controller.php?action=add&id=<?php echo $product['product_ID']; ?>">Add to Cart</a>
                </tr>
            <?php endforeach;?>
        </table>
        <a href="cart_view.php">View Cart</a>
    </body>
</html>