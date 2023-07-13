<?php

require_once "BancoController.php";
require_once "./Models/Token.php";

class InicioController extends BancoController{

    public function index(){
        $tk = new Token();
        $token = $tk->gerar_token("378");
        $conexao = $this->conexaoBD();
        var_dump($conexao);
        include "./Views/home/index.php";
        echo "<br>".$token."<br>";
        $retorno = $tk->verifica_token($token);
        var_dump($retorno);

    }

}

?>