<?php

include "../conexao.php";

/**
 * PDO::errorCode — Retornar apenas o código do erro do SQLSTATE
 * PDO::errorInfo — Array com informações sobre o erro (codigo de erro do drive, mensagem de erro, codigo de erro do SQLSTATE)
 */

try {
    $pdo->exec("SELECT * FROM clien");
} catch (PDOException $err) {
    echo "Erro na execução com o banco de dados. Informe ao programador o seguinte erro: \n";
    echo "Código: " . $pdo->errorInfo()[1] . "\n";
    echo "Mensagem: " . $pdo->errorInfo()[2] . "\n";
}