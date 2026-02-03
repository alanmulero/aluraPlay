<?php

$host = 'localhost';
$db   = 'aluarVideos';
$user = 'root';
$pass = '4541';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);


try {
    $conn;
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Conexão bem sucedida!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}






?>