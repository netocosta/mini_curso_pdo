<?php

include "../conexao.php";

/**
 * PDOStatement::fetchObject — Retorna o proximo resultados de uma consulta como um objeto.
 */

class Cliente {

}

try {

    $sql = 'SELECT * FROM clientes';
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();
    $result = $prepare->fetchObject();

    print_r($result);

} catch (PDOException $err) {
    echo $err->getMessage();
}