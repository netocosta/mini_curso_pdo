<?php

include "../conexao.php";

/**
 * PDOStatement::rowCount — Retorna a quantidade de resultados de uma consulta.
 */

try {

    $sql = "SELECT * FROM clientes";
    $exec = $pdo->query($sql);
    $count = $exec->rowCount();

    echo "Essa consulta retornou $count resultados.";

} catch (PDOException $err) {
    echo $err->getMessage();
}