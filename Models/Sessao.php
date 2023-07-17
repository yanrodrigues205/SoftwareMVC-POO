<?php
require_once "Token.php";
class Sessao
{
    private static $usuario_logado = null;



    public function __construct()
    {
        Sessao::iniciar();
    }

    public function setarSessao($usuario){
        if($usuario && $id)
        {
           Sessao::setar($id, $usuario);
           $sessao = Sessao::pegar($id);
           if($sessao == false){
            return false;

           }else{
            return $sessao;
            

           }

           
        }else{
            //Sessao::remover(Sessao::$usuario_logado);
           return "ERRO AO SETAR SESSÃO! 404";


        }

    } 

    private static function iniciar()
    {
        session_start();
    }

    private static function setar($chave, $valor)
    {
        $_SESSION["token_usuario"] = $valor;
    }

    public static function pegar($chave)
    {
        if(isset($_SESSION[$chave]))
        {
            return $_SESSION[$chave];
        }
        else
        {
            return $_SESSION[$key] = null;
        }
    }

    private static function remover()
    {
        unset($_SESSION[$key]);
        session_destroy($_SESSION[$key]);
    }

}

?>