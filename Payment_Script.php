<?php
include "connection.php";
session_start();

$product_names = array();
$total = 0;

$sql = "SELECT * FROM basket WHERE fullname='".$_SESSION['fullname']."'";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)){
    $product_names[] = $row['product_name'];
    $total += $row['price'];

    $prod_id = $row['prod_id'];
    mysqli_query($con, "UPDATE products SET stock = stock - 1 WHERE prod_id = '$prod_id'");
}

$product_name = implode(", ", $product_names); //Combining multiple product names into a single string https://www.w3schools.com/php/func_string_implode.asp

$order_number = '#' . uniqid(); // Generate unique order number https://www.w3schools.com/php/func_misc_uniqid.asp
$fullname = $_SESSION['fullname'];
$email = $_SESSION['email'];
$date = date("Y-m-d");

$query = "INSERT INTO orderhistory (order_number, product_name, fullname, email, total, date)
VALUES ('$order_number', '$product_name','$fullname','$email','$total','$date')";

if(mysqli_query($con, $query)) {
    mysqli_query($con, "DELETE FROM basket WHERE fullname = '$fullname'");
    Header("Location: OrderPlaced.php");
}
else {
    echo "Error: " . mysqli_error($con);
}
?>