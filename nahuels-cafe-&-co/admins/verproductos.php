<?php 
    $conexion=mysqli_connect("localhost", "root", "", "nahuesCafeAndCo") or die('Error al conectarse.');
    session_start();
    if(empty($_SESSION["user"])){
        header("Location: login.html");
    }else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administradores | Nahuel's Café & Co.</title>
    <link rel="stylesheet" href="css/inicio.css?1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
</head>
<body>
    <div class="grid-container">
        <header>
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">
                <span class="material-icons-outlined">search</span>
            </div>
            <div class="header-right">
                <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">email</span>
                <span class="material-icons-outlined" >account_circle</span><?php $variable = $_SESSION["user"]; echo " ".htmlspecialchars($variable); }?>
            </div>
        </header>

        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    Nahuel's Café & Co.
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">dashboard</span> Dashboard
                </li>
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">inventory_2</span> Ver productos
                </li>
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">add</span> Agregar producto
                </li>
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">shopping_cart</span> Ver pedidos
                </li>
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">poll</span> Estadísticas
                </li>
                <li class="sidebar-list-item">
                    <span class="material-icons-outlined">settings</span> Configuración
                </li>
        </aside>

        <main>
        <table>
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>

            </thead>

            <?php
                $consulta= "select* from products";
                $respuesta=mysqli_query($conexion, $consulta);

                while($mostrar=mysqli_fetch_array($respuesta)){
            ?>
            <tr>
                <td><?php echo htmlspecialchars($mostrar['id']) ?></td>
                <td><?php echo htmlspecialchars($mostrar['name']) ?></td>
                <td><?php echo htmlspecialchars($mostrar['description']) ?></td>
                <td><?php echo "$".htmlspecialchars($mostrar['price'] )?></td>
            </tr>
            <?php
                }
                mysqli_close($conexion);
            ?>
        </main>
    
        
    </div>

    <script src="js/script.js"></script>
    
</body>
</html>