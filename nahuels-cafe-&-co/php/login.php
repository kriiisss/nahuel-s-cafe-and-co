<?php
require 'connection.php';
$user = $_GET['user'];
$pass = $_GET['pass'];

if(isset($user) && isset($pass)){
    $db = new Database();
    $conn = $db->conectar();
    $statement = $conn->prepare("SELECT * FROM users WHERE username = ? and password = ?");

    $statement->execute(array($user, $pass));

    if($row = $statement->fetch()){
        session_start();
        header('location: ../inicio.html');
        echo htmlspecialchars($user);           
    }else{
        echo "Nombre de usuario y/o contraseña incorrectos";
    }
}

//' or 1 = 1; #
//<script>location.href="https://google.com"</script>

?>