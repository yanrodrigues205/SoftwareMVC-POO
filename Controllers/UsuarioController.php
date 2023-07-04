<?php
require_once "BancoController.php";

class UsuarioController extends BancoController
{
    public function logar(){
        $conexao = $this->conexaoBD();
        var_dump($conexao);
        include_once "./Views/acesso/entrar.php";
    }


    public function cadastrar(){
        $conexao = $this->conexaoBD();
        var_dump($conexao);
        include_once "./Views/acesso/cadastrar.php";
    }

}

?>