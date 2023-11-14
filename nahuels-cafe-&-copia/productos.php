<?php

require 'php/connection.php';
require 'php/config.php'; 
$db = new Database();
$con = $db->conectar();
$statement = $con->prepare("SELECT id, name, price FROM products");
$statement->execute();
$row = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos | Nahuel's Café & Co.</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/products.css?1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/59fba2a9c8.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="navbar">
            <a href="inicio.html" id="logo"><img src="img/logo.png" alt="Logo"></a>
            <ul>
                <li><a href="inicio.html">INICIO</a></li>
                <li><a href="">¿QUIÉNES SOMOS?</a></li>
                <li><a href="productos.html">PRODUCTOS</a></li>
                <li><a href="sucursales.html">SUCURSALES</a></li>
                <li><a href="">CONTACTO</a></li>
            </ul>
            <a id="carrito" href="login.html">CARRITO</a>
            <a id="login" href="login.html">CERRAR SESIÓN</a>
            <div class="bars">
                <i class="fa-solid fa-bars fa-2xl"></i>
            </div>
        </div>
        
        <div class="dropdown-menu">
            <li><a id="login" href="login.html">CERRAR SESIÓN</a></li>
            <li><a href="inicio.html">INICIO</a></li>
            <li><a href="">¿QUIÉNES SOMOS?</a></li>
            <li><a href="productos.html">PRODUCTOS</a></li>
            <li><a href="sucursales.html">SUCURSALES</a></li>
            <li><a href="">CONTACTO</a></li>
        </div>  
    </header>
    <main>
        <section class="container">
        <?php foreach ($row as $product){ ?>
            <a class="product" href="detalles.php?id=<?php echo $product['id']; ?>&token=<?php echo hash_hmac('sha1', $product['id'], KEY_TOKEN); ?>"> 
                <div class="product2">
                <?php
                    $id= $product['id']
                ?>
                    <img src="img/products/nophoto.jpg">
                    <h3><?php echo htmlspecialchars($product['name']) ?></h3>
                    <p><?php echo htmlspecialchars("$".$product['price']) ?></p><br>
                    <button onclick="">Añadir al carrito</button>    
                </div>      
            </a>    
        <?php } ?>    
        </section>
    </main>
    <footer>

    </footer>
    <script>
        const toogleBtn = document.querySelector('.bars');
        const toogleBtnIcon = document.querySelector('.bars i');
        const dropDownMenu = document.querySelector('.dropdown-menu');

        toogleBtn.onclick = function(){
            dropDownMenu.classList.toggle('open');
        }
    </script>
</body>
</html>