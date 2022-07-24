<?php

include "../conexao.php";

try {
    $sql = "SELECT * FROM clientes";
    $prepare = $pdo->prepare($sql);
    $count = $prepare->execute();
    $result = $prepare->fetch();

    echo "Nome: ".htmlentities($result['nome']) ."<br />";
    echo "Sobrenome: ".htmlentities($result['sobrenome']) ."<br />";
    echo "Idade: ".htmlentities($result['idade']) ."<br />";

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
 * 
 * strip_tags()    -> eliminar toda tag html
 * htmlentities()  -> substuir as tags escritas por codigos (UNICODE), com as tags html
 * 
 * " " -> &nbsp;
 * 
 */