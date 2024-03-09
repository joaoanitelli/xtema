<?php
    include_once("config.php");

    function alterarProduto($codigo, $nome, $preco, $tipo) : bool{
        global $pdo;
        $sql = "
            UPDATE produtos 
                set 
                    nome = :nome, 
                    preco = :preco, 
                    tipo = :tipo
            WHERE codigo = :codigo
        ";
        $stm = $pdo->prepare($sql);
        $stm->bindParam(":codigo", $codigo);
        $stm->bindParam(":nome", $nome);
        $stm->bindParam(":preco", $preco);
        $stm->bindParam(":tipo", $tipo);
        return $stm->execute();
    }

    function cadastrarProduto($nome, $preco, $tipo) : bool {
        global $pdo;
        $sql = "
            INSERT INTO produtos 
                (nome, preco, tipo) 
            VALUES 
                (:nome, :preco,:tipo)
        ";
        $stm = $pdo->prepare($sql);
        $stm->bindParam(":nome", $nome);
        $stm->bindParam(":preco", $preco);
        $stm->bindParam(":tipo", $tipo);
        return $stm->execute();
    }

    function consultarProdutoPorId($codigo){
        global $pdo;
        $sql = "SELECT * FROM produtos where codigo = :codigo";
        $stm = $pdo->prepare($sql);
        $stm->bindParam(":codigo", $codigo);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    function consultarProdutos(){
        global $pdo;
        $sql = "SELECT * FROM produtos";
        $stm = $pdo->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }