<?php

include "../conexao.php";

/** 
 * PDO::exec — Executa uma instrução SQL e retornar o número de linhas afetadas
 */

try {

    $count = $pdo->exec("DELETE FROM clientes");
    echo "$count linhas afetadas.";
    
} catch (PDOException $err) {
    echo $err->getMessage();
}