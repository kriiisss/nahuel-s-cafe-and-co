<?php 
    session_start();
    if(empty($_SESSION["user"])){
        echo "error";
    }else{
        $variable = $_SESSION["user"];
        echo "¡Bienvenido ".htmlspecialchars($variable)."!";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar producto</title>
</head>
<body>
    <form action="addProduct.php" method="post">
        <label for="name">Ingrese el nombre del producto</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="descr">Ingrese la descripción del producto</label><br>
        <input type="text" name="descr" id="descr"><br>
        <label for="price">Ingrese el precio del producto</label><br>
        <input type="text" name="price" id="price"><br>
        <button type="submit">Aceptar</button>       
    </form>
    <a href="logout.php">Cerrar Sesión</a>
    
</body>
</html>