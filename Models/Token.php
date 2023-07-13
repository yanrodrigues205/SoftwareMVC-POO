<?php

require '../vendor/autoload.php';

use Firebase\JWT\JWT;

class Token{
    private $chave_sistema = "85ANSguM51Abf7ryV8xud5981dy";//UMA CHAVE ALEATORIA MAS QUE NAO SEJA NADA TAO OBVIO!

    public function gerar_token($id_usuario){
        $payload = array(
            "user_id" => $id_usuario,
            "exp" => time() + 18000 //VALIDO POR 5 HORAS (1 HR = 3600)
        );

        return JWT::encode($payload, $this->chave_sistema);
    }

    public function verifica_token($token){
        try{
            $decodificar = JWT::decode($token, $this->chave_sistema, array('HS256'));
            return $decodificar;
        }catch(Exception $e){
            return false;
        }
    }

}

?>