<?php

require_once "AuthenticaController.php";

class MenuController extends AuthenticaController{
    public function __construct(){
        AuthenticaController::verificacao();
    }

    public function iniciar(){        
        $view_caminho = "./Views/privado/dashboard/index.php";
        include_once $view_caminho;

    }
}

?>