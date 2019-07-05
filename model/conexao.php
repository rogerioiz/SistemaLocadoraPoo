<?php

    $dsn = "mysql:host=localhost;dbname=locadora;port=3307";
    $user = "root";
    $pass = "";

    try{
        $db = new PDO($dsn, $user, $pass);
    }catch(PDOExeception $ex){
        echo "<h1>Houve uma falha na conexão</h1>";
        exit;
    }
    