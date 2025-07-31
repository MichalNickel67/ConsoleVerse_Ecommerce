<?php

include "connection.php";

    if (isset($_POST["fullname"])){
        $fullname = $_POST["fullname"];
    }
    if (isset($_POST["email"])){
        $email = $_POST["email"];
    }
    if (isset($_POST["phone"])){
        $phone = $_POST["phone"];
    }
    if (isset($_POST["pswd"])){
        $pswd = $_POST["pswd"];
        #$hash = md5($pswd);
    }

    $stmt = $con->prepare("INSERT INTO accounts (fullname, email, phone_number, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fullname, $email, $phone, $pswd);

    if ($stmt->execute()) {
        header("Location: RegisterSuccessful.php");
    }
    else {
        echo "Error: Unable to execute SQL statement";
    }
    $stmt->close();
?>