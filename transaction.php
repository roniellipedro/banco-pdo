<?php

require_once 'connection.php';


try {
    $pdo->beginTransaction();

    $sqlAllUsers = "SELECT * FROM usuarios";

    $stmtAllUsers = $pdo->prepare($sqlAllUsers);
    $result = $stmtAllUsers->execute();

    $sql = "INSERT INTO usuarios (username,name,password) VALUES (:username,:name,:password)";

    $username1 = 'usuario1';
    $name1 = 'Usuário 1';
    $password1 = 123456;

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':username', $username1);
    $stmt->bindParam(':name', $name1);
    $stmt->bindParam(':password', $password1);

    $stmt->execute();

    // if ($stmt->rowCount() > 0) {
    //     echo "Usuário 1 criado";
    // }

    $pdo->exec('SAVEPOINT user1_savepoint');

    $sql = "INSERT INTO usuarios (username,name,password) VALUES (:username,:name,:password)";

    $username2 = 'usuario2';
    $name2 = 'Usuário 2';
    $password2 = 123456;

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':username', $username2);
    $stmt->bindParam(':name', $name2);
    $stmt->bindParam(':password', $password2);

    $stmt->execute();

    // if ($stmt->rowCount() > 0) {
    //     echo "Usuário 2 criado";
    // }

    $pdo->exec('SAVEPOINT user2_savepoint');

    $sql = "INSERT INTO usuarios (username,name,password) VALUES (:username,:name,:password)";

    $username3 = 'usuario3';
    $name3 = 'Usuário 3';
    $password3 = 123456;

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':username', $username3);
    $stmt->bindParam(':name', $name3);
    $stmt->bindParam(':password', $password3);

    $stmt->execute();

    // if ($stmt->rowCount() > 0) {
    //     echo "Usuário 3 criado";
    // }

    $pdo->exec('SAVEPOINT user3_savepoint');

    $pdo->exec('ROLLBACK TO user2_savepoint');

    $pdo->commit();

    // if ($stmtAllUsers) {
    //     $data = $stmtAllUsers->fetchAll(PDO::FETCH_OBJ);

    //     foreach ($data as $line) {
    //         if ($line->username === $username1 || $line->username === $username2) {
    //             $pdo->rollBack();
    //         } else {
    //             echo 'Usuários adicionados com sucesso';
    //         }
    //     }
    //     $pdo->commit();
    // }
} catch (PDOException $e) {
    $resultCode = $e->getCode();
    if ($resultCode == 23000) {
        echo 'Usuário já existe no banco de dados, desfazendo ultimas inserções.';
    }
}
