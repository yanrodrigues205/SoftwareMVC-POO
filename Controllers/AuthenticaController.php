<?php
require_once dirname(__FILE__, 2)."/Models/Token.php";

class AuthenticaController{

    public function verificacao($token){
        $tk = new Token();
        return $tk->verifica_token($token);
    }





    private  function iniciar_sessao($id, $nome, $email){
        $tk = new Token();
        return $tk->gerar_token($id, $nome, $email);

    }
}

?>