<?php
    function getLocation()
    {
        $protocole = $_SERVER['REQUEST_SCHEME'].'://';
        $host = $_SERVER['HTTP_HOST'] . '/';
        $project = explode('/', $_SERVER['REQUEST_URI'])[1];
        return array("protocole" => $protocole,"host"=>$host,"project"=>$project);
    }

    function getNomeProjeto(){
        return getLocation()["project"];
    }