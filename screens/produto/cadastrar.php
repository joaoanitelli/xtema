<?php

    include_once("../../db/produto.php");

    if ($_POST) {
        if(isset($_POST['nome']) && isset($_POST['preco']) && isset($_POST['tipo'])){
            if(cadastrarProduto($_POST['nome'], $_POST['preco'], $_POST['tipo']));
                header("Location: consultar.php");
        }
    }else {
        include_once('index.php');
    }

