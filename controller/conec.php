<?php
$server = "localhost";
$user = "root";
$db = "ecommerce";
$pass = "";


try {
    //code...
    $conexion = new PDO("mysql:host=$server;dbname=$db",$user,$pass);
} catch (Exception $ex) {
    //throw $th;
    echo $ex->getMessage();
}

?>