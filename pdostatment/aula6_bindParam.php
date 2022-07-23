<?php

include "../conexao.php";

$nome = 'Neto';
$sobrenome = 'Costa';
$idade = "34";

try {
    $sql = 'INSERT INTO clientes (nome, sobrenome, idade) VALUES (:nome, :sobrenome, :idade)';
    $prepare = $pdo->prepare($sql);
    $prepare->bindParam(":nome", $nome, PDO::PARAM_STR);
    $prepare->bindParam(":sobrenome", $sobrenome);
    $prepare->bindParam(":idade", $idade, PDO::PARAM_INT);
    $count = $prepare->execute();

    echo "$count linhas afetadas.";

} catch (PDOException $err) {
    echo $err->getMessage();
}