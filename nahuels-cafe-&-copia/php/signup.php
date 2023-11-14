<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$dni = $_POST['dni'];
$date_of_birth = $_POST['date_of_birth'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$conexion = mysqli_connect("localhost","root","","nahuesCafeAndCo")
or die('Error al conectarse.');

if(isset($name) && isset($surname) && isset($dni) && isset($date_of_birth) && isset($phone_number) && isset($email) && isset($username) && isset($password)){
    $instruccion = "insert into users (name, surname, dni, date_of_birth, phone_number, email, username, password) values ('$name', '$surname', '$dni', '$date_of_birth', '$phone_number', '$email', '$username', '$password')"; 

    $resultado = mysqli_query($conexion,$instruccion);
    header("Location:../login.html");

    mysqli_close($conexion);

}

?>