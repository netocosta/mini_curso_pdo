<?php

include "../conexao.php";

/**
 * PDO::prepare — Prepara a SQL que precisa "escapar" os dados para execução.
 * PDOStatement::execute() - Executar
 */

$dados = [
    ['nome' => 'Neto', 'sobrenome' => 'Costa', 'idade' => 34],
    ['nome' => 'Costa', 'sobrenome' => 'Neto', 'idade' => 35],
    ['nome' => 'Neto', 'sobrenome' => 'Neto', 'idade' => 36],
    ['nome' => 'Costa', 'sobrenome' => 'Costa', 'idade' => 37],
];

try {
    $prepare = $pdo->prepare("INSERT INTO clientes (nome, sobrenome, idade) VALUES (:nome, :sobrenome, :idade)");
    
    $count = 0;
    foreach($dados as $valor) {
        $prepare->execute($valor);
        $count++;
    }

    echo "$count dados inseridos com sucesso.";
} catch (PDOException $err) {
    echo $err->getMessage();
}