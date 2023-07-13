<?php

require_once dirname(__FILE__, 2)."./Models/Sessao.php";
require_once dirname(__FILE__, 2)."/Models/Token.php";

class AuthenticaController{

    public function teste(){
        $tk = new Token();
        return $tk->gerar_token("462", "Yan Pablo Rodrigues", "yan.pablo205@gmail.com");
    }
}

?>