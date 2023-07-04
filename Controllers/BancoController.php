<?php

require_once("./Models/BancoDeDados.php");

class BancoController {
    private function pegarDados($host = "127.0.0.1",$usuario = "root", $senha = "", $banco = "software_mvc"){
        if($host == null) $host = "127.0.0.1";
        if($usuario == null) $usuario = "root";
        if($senha == null) $senha = "";
        if($banco == null) $banco = "software_mvc";

        return new BancoDeDados($host, $senha, $usuario, $banco);
    }

    protected function conexaoBD(){
        return $this->pegarDados();
    }

}

?>