<?php

class Database{

function conectar(){
    try{
        $conn= "mysql:host=localhost; dbname=nahuescafeandco; charset=utf8";
        $options =[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
            PDO::ATTR_EMULATE_PREPARES=> false
        ];

        $pdo = new PDO ($conn, 'root', '', $options);
        return $pdo;
    }catch(PDOException $e){
        echo 'Error conexión: '. $e->getMessage();
        exit;
    }
}
}

?>