<?php

include "../conexao.php";

/**
 * PDO::prepare — Prepara a SQL que precisa "escapar" os dados para execução.
 * PDOStatement::execute() - Executar
 */

try {
    $prepare = $pdo->prepare("INSERT INTO clientes (nome, sobrenome) VALUES (:nome, :sobrenome)");
    
    $count = $prepare->execute([
        'nome' => 'Neto',
        'sobrenome' => 'Costa'
    ]);

    echo "$count linhas foram inseridas.";
} catch (PDOException $err) {
    echo $err->getMessage();
}