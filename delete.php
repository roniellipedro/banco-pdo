<?php

require_once 'connection.php';

$sql = "DELETE FROM usuarios WHERE id = :id";

$id = 2;

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);

$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo 'Usuário excluído com sucesso';
} else {
    echo 'Nenhum usuário excluído';
}
