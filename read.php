<?php

require_once 'connection.php';

$sql = 'SELECT * FROM usuarios';

$stmt = $pdo->prepare($sql);

$result = $stmt->execute();

if ($result) {
    // $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // foreach ($data as $line) {
    //     echo '<h1>' . $line['name'] . '</h1>';
    //     echo '<pre>';
    //     var_dump($line);
    //     echo '</pre>';
    //     echo '<hr>';
    // }

    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($data as $line) {
        echo '<h1>' . $line->name . '</h1>';
        echo '<pre>';
        var_dump($line);
        echo '</pre>';
        echo '<hr>';
    }
}
