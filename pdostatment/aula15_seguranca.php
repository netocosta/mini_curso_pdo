<?php

include "../conexao.php";

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];

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



/**
 * SQL Injection => É usado um codigo malicioso que adultera alguma consulta
 * sql dentro do seu codigo.
 * 
 * SELECT * FROM login WHERE usuario='' or 1='1';
 * ' or 1='1
 * 
 * 
 * XSS -> Cross-site Scripting
 * <script>alert("Ataque XSS");</script>
 * 
 * REGEX - Expressões Regulares
 * 
 */