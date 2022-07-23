<?php

include "../conexao.php";

/**
 * PDOStatement::fetch — Retorna o proximo resultados de uma consulta.
 * 
 * Modos:
 * PDO::FETCH_ASSOC         - Nomes das colunas
 * PDO::FETCH_BOTH (padrão) - Nomes e Indices das colunas
 * PDO::FETCH_NUM           - Indices das colunas
 * PDO::FETCH_OBJ           - Objeto
 */

try {

    $sql = "SELECT * FROM clientes";
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();
    $result = $prepare->fetch(PDO::FETCH_OBJ);

    print_r($result);

} catch (PDOException $err) {
    echo $err->getMessage();
}