<?php

require_once "BancoController.php";

class InicioController extends BancoController{

    public function index(){
        $conexao = $this->conexaoBD();
        var_dump($conexao);
        include "./Views/home/index.php";

    }

}

?>