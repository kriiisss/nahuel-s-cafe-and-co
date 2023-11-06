<?php
require '../php/connection.php';
$name = $_POST['name'];
$descr = $_POST['descr'];
$price = $_POST['price'];

if(isset($name) && isset($descr) && isset($price)){
    $db = new Database();
    $conn = $db->conectar();
    $statement = $conn->prepare("INSERT INTO products (name, description, price) values (?, ?, ?)");

    $statement->execute([$name, $descr, $price]);
    header("Location:inicio.php");  
}
?>