<?php
require_once dirname(__FILE__, 2)."/Models/Token.php";
require_once dirname(__FILE__, 2)."/Models/Sessao.php";

class AuthenticaController{

    public function verificacao(){
        $sessao = new Sessao();
        $busca_sessao = $sessao->buscaSessao();
        $tk = new Token();
        $decodificar = $tk->verifica_token($busca_sessao);

        if(!$decodificar){
            header("location: logar");
        }else{
            return $decodificar;
        }

    }




    public function iniciar_sessao($id, $nome, $email){
        
        $tk = new Token();
        $token = $tk->gerar_token($id, $nome, $email);
        $sessao = new Sessao();
        $sessao_salva = $sessao->setarSessao($token); 
        if($sessao_salva != false){
            return true;
        }

    }
   
}

?>