<?php
require_once('../Model/product_db.php');

function get_products()
{
    $product_rows = get_all_products();
    $products = array();

    if($product_rows){
        $index = 0;
        while($row = mysqli_fetch_array($product_rows)) {
            $products[$index]["product_ID"] = $row["product_ID"];
            $products[$index]["product_name"] = $row["product_name"];
            $products[$index]["description"] = $row["description"];
            $products[$index]["price"] = $row["price"];
            $products[$index]["updated_dt"] = $row["updated_dt"];
            $index++;
        }
    }

    return $products;
}
?>