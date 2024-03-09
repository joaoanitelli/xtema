<?php
    include("db/util.php");
    $_SESSION["path"] = getNomeProjeto();
    
    header("location: screens/produto/consultar.php");