<?php

require_once 'connection.php';

$sql = 'SELECT * FROM tabelainexistente';
$stmt = $pdo->prepare($sql);

try {
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Erro na conexão: ' . $e->getMessage();
    echo '<pre>';
    var_dump($stmt->errorInfo());
}
