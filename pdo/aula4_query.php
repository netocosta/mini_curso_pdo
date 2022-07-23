<?php

include "../conexao.php";

/**
 * PDO::query — Prepara e executa SQL que não precisa "escapar" os dados
 * 
 */


try {
    $results = $pdo->query('SELECT * FROM clientes WHERE');

    foreach($results as $linha) {
        print_r($linha);
    }

} catch (PDOException $err) {
    echo $err->getMessage();
}