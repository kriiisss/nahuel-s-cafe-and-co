<?php
    include 'php/connection.php';

    $instruccion="insert into users(name, surname, dni, fecha_nacimiento, phone_number, email, username, password) values ('name', 'surname', 'dni', 'fecha_nacimiento', 'phone_number', 'email', 'username', 'password')";
    mysqli_close ($connection);
?>