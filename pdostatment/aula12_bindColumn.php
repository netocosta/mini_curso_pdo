<?php

include "../conexao.php";

/**
 * Modo:
 * PDO::FETCH_BOUND - Retorna true e atribui as colunas o valor vinculado as variaveis
 */

try {

    $sql = "SELECT * FROM clientes";
    $prepare = $pdo->prepare($sql);
    $prepare->bindColumn(1, $id);
    $prepare->bindColumn(2, $nome);
    $prepare->bindColumn('sobrenome', $varSobrenome);
    $prepare->bindColumn('idade', $varIdade);
    $result = $prepare->execute();

    while ($prepare->fetch(PDO::FETCH_BOUND)) {
        echo "$id \t $nome \t $varSobrenome \t $varIdade \n";
    }

} catch (PDOException $err) {
    echo $err->getMessage();
}