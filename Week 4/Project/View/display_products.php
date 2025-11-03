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

            <!-- //find a product  -->
            <?php foreach($product_arr as $product):;?>
                <tr>
                    <td><?php echo $product["product_ID"];?></td>
                    <td><?php echo $product["product_name"];?></td>
                    <td><?php echo $product["description"];?></td>
                    <td><?php echo $product["price"];?></td>
                    <td><?php echo $product["updated_dt"];?></td>
                </tr>
            <?php endforeach;?>
        </table>
        <!-- <a href="find_product.php">Find a product</a> -->
    </body>
</html>