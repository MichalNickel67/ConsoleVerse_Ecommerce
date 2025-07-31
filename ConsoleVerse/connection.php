<?php

$host = "localhost";
$username = "root";
$pass = "";
$db = "consoleverse_website";

$con = mysqli_connect($host, $username, $pass, $db);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: ".mydqli_connect_error();
}
else {
}

?>