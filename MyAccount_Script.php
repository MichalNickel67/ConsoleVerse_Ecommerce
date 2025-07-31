<?php
    include "connection.php";
    session_start();

    $acc_id=$_REQUEST['acc_id'];

    if (isset($_POST["acc_id"])) {
        $acc_id = $_POST["acc_id"];
    }
    if (isset($_POST["fullname"])) {
        $fullname = $_POST["fullname"];
    }
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    }
    if (isset($_POST["phone_number"])) {
        $phonenumber = $_POST["phone_number"];
    }
    if (isset($_POST["password"])) {
        $password = $_POST["password"];
    }
    if (isset($_POST["level"])) {
        $level = $_POST["level"];
    }

    $sql = "UPDATE accounts SET fullname = '$fullname', email = '$email', phone_number = '$phonenumber', password = '$password', level = '$level' WHERE acc_id='$acc_id'";

    if (mysqli_query($con, $sql)) {
        header("Location: AccountList.php");
        exit();
    }
    else {
        echo mysqli_error($con);
    }
?>