<?php

require_once 'env.php';

$dsn = "mysql:host=$ENV_HOST;dbname=$ENV_DBNAME";

try {
    $pdo = new PDO($dsn, $ENV_USERNAME, $ENV_PASSWORD);
    echo "Conexão bem sucedida.";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
