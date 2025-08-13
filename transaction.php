<?php

require_once 'connection.php';

$pdo->beginTransaction();

$sql = "INSERT INTO usuarios (username,name,password) VALUES (:username,:name,:password)";

$username = 'Usuário 1111';
$name = 'usuario1';
$password = 123456;

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':username', $username);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':password', $password);

$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo "Usuário 1 criado";
}

echo '<hr>';

$sql = "INSERT INTO usuarios (username,name,password) VALUES (:username,:name,:password)";

$username = 'Usuário 2222';
$name = 'usuario2';
$password = 123456;

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':username', $username);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':password', $password);

$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo "Usuário 2 criado";
}

// $pdo->commit();
