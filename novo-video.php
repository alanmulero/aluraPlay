<?php
require_once 'config/connect.php';

$titulo = $_POST['titulo'] ?? '';
$url = $_POST['url'] ?? '';

if (!empty($titulo) && !empty($url)) {

    $sql = "INSERT INTO videos (title, url) VALUES (:title, :url)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $titulo);
    $stmt->bindParam(':url', $url);
    $stmt->execute();

    echo "Vídeo cadastrado com sucesso!";
} else {
    echo "Preencha todos os campos.";
}

$conn = null;
