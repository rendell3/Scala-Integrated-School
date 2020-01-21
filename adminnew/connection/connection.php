<?php
$username = "root";
$password = "root";
$localhost = "localhost";
$database = "scala";
try {
    $conn = new PDO("mysql:host=$localhost;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

define("LoginPanel","SCALA | Login");

?>
