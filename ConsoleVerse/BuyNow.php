<?php
    include "connection.php";
    session_start();
    
    $stmt = $con->prepare("INSERT INTO basket(prod_id, product_name, fullname, email, price, img) VALUES (?,?,?,?,?,?)"); 
    $stmt->bind_param("ssssss", $prod_id, $product_name, $fullname, $email, $price, $img);
    
    $prod_id = $_GET["prod_id"];

    $sql = "SELECT brand, model, price, img FROM products WHERE prod_id = $prod_id";
    $result = $con->query($sql);
    
    if ($result) {
        $row = $result->fetch_assoc();
    
        $product_name = $row["brand"] . " " . $row["model"];
        $price = $row["price"];
        $img = $row["img"];
        $fullname = $_SESSION["fullname"];
        $email = $_SESSION["email"];
        
        if ($stmt->execute()) {
            header("Location: AddressFORM.php");
            exit();
        }
        else {
            echo "Error executing statement";
        }
    }
    else {
        echo "Error fetching product details";
    }
    
    $stmt->close();
    $con->close();
?>