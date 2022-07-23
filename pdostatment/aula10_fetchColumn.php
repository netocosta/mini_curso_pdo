<?php

include "../conexao.php";

try {

    $sql = "SELECT * FROM clientes";
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();
    $result = $prepare->fetchColumn(3);

    print_r($result);

} catch (PDOException $err) {
    echo $err->getMessage();
}