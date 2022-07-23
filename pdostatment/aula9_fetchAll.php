<?php

include "../conexao.php";

/**
 * PDOStatement::fetchAll — Retorna a todos os resultados de uma consulta.
 * 
 * Modos:
 * PDO::FETCH_ASSOC         - Array com o nome das colunas              - $var['indice']
 * PDO::FETCH_BOTH (padrão) - Array com o nome e indices das colunas    - $var['indice']
 * PDO::FETCH_NUM           - Array indices das colunas                 - $var['indice']
 * PDO::FETCH_OBJ           - Objeto com o nome das colunas             - $var->indice
 */

try {

    $sql = "SELECT * FROM clientes";
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();
    $results = $prepare->fetchAll(PDO::FETCH_OBJ);

    foreach ($results as $linha) {
        if ($linha->idade >= 50) {
            echo "PASSOU DE MEIO CENTENARIO: {$linha->id} \t {$linha->nome} \t {$linha->sobrenome} \t {$linha->idade}\n";
        }
        if ($linha->idade < 50) {
            echo "AINDA NAO PASSOU DE MEIO CENTENARIO: {$linha->id} \t {$linha->nome} \t {$linha->sobrenome} \t {$linha->idade}\n";
        }
    }

} catch (PDOException $err) {
    echo $err->getMessage();
}