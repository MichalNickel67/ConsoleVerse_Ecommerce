<?php
    include "connection.php";
    session_start();

    $acc_id = $_REQUEST["acc_id"];

    $sql = "DELETE FROM accounts WHERE acc_id = '$acc_id'";

    if (mysqli_query($con, $sql)) {
        header("Location: Logout.php");
        exit();
    }
    else {
        echo mysqli_error($con);
    }
?>