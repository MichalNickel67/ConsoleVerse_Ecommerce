<?php
    include "connection.php";
    session_start();

    if (isset($_POST["brand"])) {
        $brand = $_POST["brand"];
    }
    if (isset($_POST["model"])) {
        $model = $_POST["model"];
    }
    if (isset($_POST["descrip"])){
        $descrip = $_POST["descrip"];
    }
    if (isset($_POST["short_desc"])){
        $short_desc = $_POST["short_desc"];
    }
    if (isset($_POST["cpu"])){
        $cpu = $_POST["cpu"];
    }
    if (isset($_POST["gpu"])){
        $gpu = $_POST["gpu"];
    }
    if (isset($_POST["memory"])){
        $memory = $_POST["memory"];
    }
    if (isset($_POST["storage"])){
        $storage = $_POST["storage"];
    }
    if (isset($_POST["price"])){
        $price = $_POST["price"];
    }
    if (isset($_POST["img"])){
        $img = $_POST["img"];
    }
    if (isset($_POST["rating"])){
        $rating = $_POST["rating"];
    }
    if (isset($_POST["stock"])){
        $stock = $_POST["stock"];
    }

    $sql = "INSERT INTO products (brand, model, descrip, short_desc, cpu, gpu,  memory, storage, price, img, rating, stock) VALUES ('$brand', '$model', '$descrip', '$short_desc', '$cpu', '$gpu', '$memory', '$storage', '$price', '$img', '$rating', '$stock')";

    if (mysqli_query($con, $sql)) {
        header("Location: ProductsList.php");
        exit();
    }
    else {
        echo mysqli_error($con);
    }
?>