<?php

include "../conexao.php";

try {
    $sql = 'INSERT INTO clientes (nome, sobrenome, idade) VALUES (:nome, :sobrenome, :idade)';
    $prepare = $pdo->prepare($sql);
    $prepare->bindValue(":nome", 'Antonio', PDO::PARAM_STR);
    $prepare->bindValue(":sobrenome", 'Alberto');
    $prepare->bindValue(":idade", 75, PDO::PARAM_INT);
    $count = $prepare->execute();

    echo "$count linhas afetadas.";




} catch (PDOException $err) {
    echo $err->getMessage();
}