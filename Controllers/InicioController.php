<?php

require_once "BancoController.php";

class InicioController extends BancoController{

    public function index(){
    
        $conexao = $this->conexaoBD();
        include "./Views/home/index.php";
        

    }

}

?>