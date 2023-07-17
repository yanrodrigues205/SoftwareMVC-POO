<?php
require_once "AuthenticaController.php";
require_once "BancoController.php";
require_once "Models/Usuario.php";


class UsuarioController extends BancoController
{
    public function logar(){
        $view_caminho = "./Views/acesso/entrar.php";

        $conexao = $this->conexaoBD();
        
        if(!empty($_POST['email']) || !empty($_POST['senha'])){
            $usuario = new Usuario("","", $_POST['email'], $_POST['senha'], "");
            $retorno = $usuario->buscar($conexao);
            if($retorno != "" && !empty($retorno)){
                $id_us = $retorno['id_us'];
                $nome_us = $retorno['nome_us'];
                $email_us = $retorno['email_us'];
                $sessao = new AuthenticaController();
                
                $sessao_start = $sessao->iniciar_sessao($id_us, $nome_us, $email_us);
                
                
                if(!$sessao_start){
                    $msg_retorno = "<br><center><strong style='color: red'>Erro ao logar!</strong></center>";
                }else{
                    
                    header("location: dashboard");
                    
                    
                   
                    

                }


               

            }else{
                $msg_retorno = "<br><center><strong style='color: red'>Erro ao logar!</strong></center>";
            }

        }
        
        

        
        include_once $view_caminho;
        
    }


    public function cadastrar(){
        $view_caminho = "./Views/acesso/cadastrar.php";
        $conexao = $this->conexaoBD();
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