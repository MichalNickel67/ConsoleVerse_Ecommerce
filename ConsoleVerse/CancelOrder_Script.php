<?php
    include "connection.php";
    session_start();

    $order_id = $_REQUEST["order_id"];
    mysqli_query($con, "UPDATE products SET stock = stock + 1 WHERE prod_id = '$prod_id'");
    $sql = "DELETE FROM orderhistory WHERE order_id = '$order_id'";

    if(mysqli_query($con, $sql)) {
        mysqli_query($con, "DELETE FROM basket WHERE fullname = '$fullname'");
        Header("Location: OrderPlaced.php");
    }

    if (mysqli_query($con, $sql)) {
        header("Location: ViewOrders.php");
        exit();
    }
    else {
        echo mysqli_error($con);
    }
?>