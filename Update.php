<?php
include "connection.php";

if(isset($_POST["id"])) {
    $id = $_POST["id"];
}
if(isset($_POST["brand"])) {
    $brand = $_POST["brand"];
}
if(isset($_POST["model"])) {
    $model = $_POST["model"];
}
if(isset($_POST["description"])) {
    $description = $_POST["description"];
}

$sql = "UPDATE products SET brand = '$brand','$model', description='$description' WHERE ID ='$id'";

if (mysqli_query($con, $sql)) {
    header("Location: Admin.php");
}
else{
    echo mysqli_error($con);
}

?>