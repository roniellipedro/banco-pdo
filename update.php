<?php

require_once 'connection.php';

$sql = 'UPDATE usuarios SET name = :name, username = :username, password = :password WHERE id = :id';

$_name = 'Testada';
$_username = 'testada';
$_password = '789456';
$_id = 1;

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':name', $_name);
$stmt->bindParam(':username', $_username);
$stmt->bindParam(':password', $_password);
$stmt->bindParam(':id', $_id);

$queryExecute = $stmt->execute();

if ($queryExecute) {
    echo 'Usuário ' . $_name . ' atualizado!';
} else {
    echo 'Erro ao atualizar';
}

echo '<br>';
echo 'Linhas afetadas: ' . $stmt->rowCount();
