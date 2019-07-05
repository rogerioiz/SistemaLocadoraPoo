<?php
// A variavel $req vai ser a chave para pegar;
$req = key($_GET);

// A varialvel $controller vai ser de forma dinamica
$controller = $req."Controller";


require_once "Controller/".$controller.".php";

$solicitacao = new $controller();
$solicitacao->req($_SERVER);
