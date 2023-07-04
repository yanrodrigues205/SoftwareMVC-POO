<?php

require_once("BancoController.php");

class InicioController extends BancoController{

    public function index(){
        include "./Views/home/index.php";

    }

}

?>