<?php
require '../../php/connection.php';
$user = $_GET['user'];
$pass = $_GET['pass'];

if(isset($user) && isset($pass)){
    $db = new Database();
    $conn = $db->conectar();
    $statement = $conn->prepare("SELECT * FROM admins WHERE username = ? and password = ?");

    $statement->execute(array($user, $pass));

    if($row = $statement->fetch()){   
        session_start();
        $_SESSION["user"]=$user;
        header('location: ../inicio.php');         
    }
}

//' or 1 = 1; #
//<script>location.href="https://google.com"</script>

?>