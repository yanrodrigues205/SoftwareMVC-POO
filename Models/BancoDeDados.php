<?php
    class BancoDeDados
    {
        private $servidor;
        private $usuario;
        private $senha;
        private $banco;

        public function __construct($servidor, $senha,$usuario, $banco){
            $this->servidor = $servidor;
            $this->usuario = $usuario;
            $this->senha = $senha;
            $this->banco = $banco;
        }

        private function conecta(){
            try
            {
        return $conexao = new PDO("mysql:host=".$this->servidor.";"."dbname=".$this->banco, $this->usuario, $this->senha);
            }
            catch(Exception $e){
                return "ERRO DE CONEXÃO ->".$e;
            }
        }

        public function executar($sql, $paramametros = []){
            try
            {
                $resultado = $this->conecta();

                if(!$resultado){
                    return "Erro conexão inesperado!  -> Models->BancoDeDados";
                }
                /** @var PDO */
                $pdo = $resultado;
                $prepara = $pdo->prepare($sql);
                $executa = $prepara->execute($paramametros);

                if($executa == false){
                    return "Erro na Execução do SQL -> Models->BancoDeDados";
                }else{
                    return "SQL realizado com sucesso!";
                }

            }
            catch(Exception $e)
            {
                $err = "Não conseguiu executar o comando SQL! GRAVE".$e;
                return $err;
            }
        }
    }
?>