<?php
require_once "Token.php";
class Sessao
{
    private static $sessao = "token-us";



    public function __construct()
    {
        Sessao::iniciar();
    }

    public function setarSessao($token){
        if($token)
        {
           Sessao::setar($sessao, $token);
           $deu_certo = Sessao::pegar($sessao);
            return $deu_certo;
               
        }else{
            //Sessao::remover(Sessao::$usuario_logado);
           return "ERRO AO SETAR SESSÃO! 404";


        }

    } 

    public function buscaSessao(){
        return Sessao::pegar($sessao);
    }

    private static function iniciar()
    {
        session_start();
    }

    private static function setar($chave, $valor)
    {
        $_SESSION[$chave] = $valor;
    }

    public static function pegar($chave)
    {
        if(isset($_SESSION[$chave]))
        {
            return $_SESSION[$chave];
        }
        else
        {
            return false;
        }
    }

    private static function remover($chave)
    {
        unset($_SESSION[$chave]);
        session_destroy($_SESSION[$chave]);
    }

}

?>