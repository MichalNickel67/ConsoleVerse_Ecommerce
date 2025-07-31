<?php

session_start();
include "connection.php";

if(isset($_POST["email"]) && isset($_POST["pswd"])){
    $email = $_POST["email"];
    $pswd = $_POST["pswd"];
    
    
    $sql = "SELECT * FROM accounts WHERE email = '$email' AND password = '$pswd'";
    $result = mysqli_query($con, $sql);

    if($result) {
        if(mysqli_num_rows($result) == 1){ 
            $row = mysqli_fetch_assoc($result);

            $_SESSION["email"] = $email;
            $_SESSION["level"] = $row["level"];
            $_SESSION["fullname"] = $row["fullname"];
            $_SESSION["acc_id"] = $row["acc_id"];
            

            if ($_SESSION["level"] == "Admin"){
                header("Location: Admin.php");
                exit();
            }
            else {
                header("Location: User.php");
                exit();
            }
        } 
        else{
            header("Location: SignIn.php");
            exit();
        }
    }
    else {
        echo "Error: " . mysqli_error($con);
        exit();
    }
}

?>
