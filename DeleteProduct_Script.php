<?php
    include "connection.php";
    session_start();

    $prod_id = $_REQUEST["prod_id"];

    $sql = "DELETE FROM products WHERE prod_id = '$prod_id'";

    if (mysqli_query($con, $sql)) {
        header("Location: ProductsList.php");
        exit();
    }
    else {
        echo mysqli_error($con);
    }
?>