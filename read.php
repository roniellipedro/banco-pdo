<?php

require_once 'connection.php';


$id = '1; DROP TABLE usuarios;';
// $sql = 'SELECT * FROM usuarios WHERE id = :id';

$sql = 'SELECT * FROM usuarios';

$stmt = $pdo->prepare($sql);
// $stmt->bindParam(':id', $id);
$result = $stmt->execute();

if ($stmt) {
    // $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // foreach ($data as $line) {
    //     echo '<h1>' . $line['name'] . '</h1>';
    //     echo '<pre>';
    //     var_dump($line);
    //     echo '</pre>';
    //     echo '<hr>';
    // }

    $data = $stmt->fetchAll(PDO::FETCH_OBJ);


    echo '<h1>Registros encontrados: ' . $stmt->rowCount() . '</h1>';
    foreach ($data as $line) {
        echo '<h1>' . $line->name . '</h1>';
        echo '<pre>';
        var_dump($line);
        echo '</pre>';
        echo '<hr>';
    }
}
