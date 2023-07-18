<?php

require_once "AuthenticaController.php";

class MenuController extends AuthenticaController{


    public function __construct(){
    }

    public function iniciar(){        
        $dados_usuario = AuthenticaController::verificacao();   
        $view_caminho = "./Views/privado/dashboard/index.php";
        include_once $view_caminho;

    }

    
}

?>