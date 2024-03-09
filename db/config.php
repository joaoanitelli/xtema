<?php

    $host = "localhost";
    $bd = "xtema";
    $user = "root";
    $senha = "";

    try{
        $pdo = new PDO("mysql:host=$host;dbname=$bd", $user, $senha);
        //echo "Conexão realizada com sucesso!";
    } catch (PDOException $e){
        echo "Erro:". $e->getMessage();
    }