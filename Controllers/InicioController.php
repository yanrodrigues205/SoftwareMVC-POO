<?php

require_once "BancoController.php";
require_once "AuthenticaController.php";

class InicioController extends BancoController{

    public function index(){
    
        $conexao = $this->conexaoBD();
        var_dump($conexao);
        include "./Views/home/index.php";
        $auth = new AuthenticaController();
        echo $auth->teste();
        var_dump($retorno);

    }

}

?>