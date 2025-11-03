<?php
require_once('database.php');

function get_all_products()
{
    $conn = get_db_conn();
    $query = "SELECT * FROM product";
    $result = mysqli_query($conn, $query);
    return $result;
}

function get_product($productName)
{
    $conn = get_db_conn();
    $query = "SELECT * FROM product WHERE product_name like '%$productName%'";
    return mysqli_query($conn, $query);
}

?>