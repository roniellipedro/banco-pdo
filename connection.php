<?php

require_once 'env.php';

$dsn = "mysql:host=$ENV_HOST;dbname=$ENV_DBNAME";

try {
    $pdo = new PDO($dsn, $ENV_USERNAME, $ENV_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem sucedida.<hr><br>";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
