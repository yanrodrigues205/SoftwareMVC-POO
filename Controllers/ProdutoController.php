<?php

    require_once("BancoController.php");

    class ProdutoController extends BancoController
    {

        public function __construct()
        {

        }

        public function cadastrar(){
            $view_caminho = "./Views/privado/produtos/cadastrar.php";
            include_once $view_caminho;

        }

        

    }

?>