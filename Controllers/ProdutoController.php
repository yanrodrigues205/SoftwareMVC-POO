<?php
    require_once("AuthenticaController.php");
    require_once("BancoController.php");
    require_once("Models/Produto.php");

    class ProdutoController extends BancoController
    {

        public function __construct()
        {
            $authentica = new AuthenticaController();
            $verifica = $authentica->verificacao();
        }

        public function cadastrar(){
            $conexao = $this->conexaoBD();
            $view_caminho = "./Views/privado/produtos/cadastrar.php";
            

            if(!empty($_POST['titulo']) && !empty($_POST['descricao']) && !empty($_POST['quantidade']) && !empty($_POST['tipo']) && !empty($_POST['valor'])){
                $produto = new Produto($_POST['titulo'], $_POST['descricao'], $_POST['valor'], $_POST['quantidade'], $_POST['tipo']);

                $mensagem_retorno = $produto->cadastrar($conexao);


            }
            include_once $view_caminho;

        }

        public function buscar($conexao){

        }

        

    }

?>