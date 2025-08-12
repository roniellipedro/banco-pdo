<?php

require_once 'connection.php';

$sql = 'INSERT INTO usuarios (username,NAME,PASSWORD) VALUES (:username,:name,:password)';

$stmt = $pdo->prepare($sql);

$_username = "robertosilva1";
$_name = "Roberto da Silva1";
$_password = "123456";

$stmt->bindParam(':username', $_username);
$stmt->bindParam(':name', $_name);
$stmt->bindParam(':password', $_password);

$stmt->execute();
