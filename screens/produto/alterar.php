<?php
    include_once("../../db/produto.php");

    if($_POST){
        if(isset($_POST['codigo']) && isset($_POST['nome']) && isset($_POST['preco']) && isset($_POST['tipo'])){
            if(alterarProduto($_POST['codigo'],$_POST['nome'], $_POST['preco'], $_POST['tipo']));
                header("Location: consultar.php");
        }
    }else {
        $resultado = consultarProdutoPorId($_GET['codigo']);

        include_once('index.php');
    }