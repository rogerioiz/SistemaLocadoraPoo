<?php 
require_once "model/Filme.php";

class FilmeController {

    public function req($server){

        switch($server['REQUEST_METHOD']){
            case "GET":
              //$atores = Ator::listarAtores();
                $filmes = new Filme();
                $filmes = $filmes->listarFilmes();
                $_REQUEST['filmes'] = $filmes;
                require_once "view/viewFilme.php";
            break;
            
            case "POST":
            break;
        }
        
    }

}
?>