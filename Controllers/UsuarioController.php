<?php
require_once "BancoController.php";
require_once "Models/Usuario.php";
class UsuarioController extends BancoController
{
    public function logar(){
        $view_caminho = "./Views/acesso/entrar.php";
        $conexao = $this->conexaoBD();
        var_dump($conexao);
        

        
        include_once $view_caminho;
    }


    public function cadastrar(){
        $view_caminho = "./Views/acesso/cadastrar.php";
        $conexao = $this->conexaoBD();
        var_dump($conexao);
        if(((empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha'])) && isset($_POST['botao'])))
        {
            $msg_retorno = "Preencha todos os campos pra finalizar o cadastro!@red";
            include $view_caminho;
            return;
        }
        else if((isset($_POST['botao']) && !empty($_POST['nome']) || !empty($_POST['email'])) || !empty($_POST['senha']))
        {
            $usuario = new Usuario(null,$_POST['nome'], $_POST['email'], $_POST['senha'], null);
            $retorno = $usuario->cadastro($conexao);
            if($retorno)
            {
            $msg_retorno = $retorno."@green";
            }
        }
        

        

        include $view_caminho;
       
    }

}

?>