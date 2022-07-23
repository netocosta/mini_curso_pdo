<?php

include "../conexao.php";

/**
 * PDO::beginTransaction — Inicia uma transação
 * PDO::commit           - Autoriza transação
 * PDO::rollBack         - Volta a tras
 */

try {
    $pdo->beginTransaction();
    $pdo->exec("INSERT INTO clientes (nome, sobrenome) VALUES ('Neto', 'Costa')");
    $pdo->commit();

    $pdo->beginTransaction();
    $pdo->exec("INSERT INTO clientes (nome, sobrenome) VALUES ('Costa', 'Neto')");
    $pdo->commit();
    
} catch (PDOException $err) {
    echo "ERRO: ".$err->getMessage();
}