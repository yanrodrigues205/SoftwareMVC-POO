<?php

require_once("BancoController.php");

class InicioController extends BancoController{

    public function index(){
        echo "a";
        include("./Views/home/index.php");

    }

}

?>