<?php

require_once 'connection.php';

$sql = 'INSERT INTO usuarios (username,NAME,PASSWORD) VALUES (:username,:name,:password)';

$stmt = $pdo->prepare($sql);

$_username = "robertosilva2";
$_name = "Roberto da Silva2";
$_password = "123456";

$stmt->bindParam(':username', $_username);
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':password', $_password);

if ($stmt->execute()) {
    if ($stmt->rowCount() > 0) {
        echo 'Usuário inserido com sucesso';
    } else {
        echo 'Nenhum dado foi inserido no banco';
    }
}
