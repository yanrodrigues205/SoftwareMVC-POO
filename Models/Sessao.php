<?php

class Sessao
{
    private static $usuario_logado = null;



    public function __construct()
    {
        Sessao::iniciar();
    }

    public function setarSessao($usuario){
        if($usuario)
        {
            Sessao::setar(Sessao::$usuario_logado, $usuario->pegarID());
            return;
        }

        Sessao::remover(Sessao::$usuario_logado);
    } 

    private static function iniciar()
    {
        session_start();
    }

    private static function setar($chave, $valor)
    {
        $_SESSION[$chave] = $valor;
    }

    private static function pegar($chave)
    {
        if(isset($_SESSION[$chave]))
        {
            return $_SESSION[$chave];
        }
        else
        {
            return $_SESSION[$chave] = null;
        }
    }

    private static function remover()
    {
        unset($_SESSION[$chave]);
        session_destroy($_SESSION[$chave]);
    }

}

?>