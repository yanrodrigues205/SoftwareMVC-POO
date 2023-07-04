<?php
require_once "ID.php";
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $data;

    public function __construct($id = null, $nome, $email, $senha, $data = null){
        if($id == null)
        {
            $id = ID::id_datahora();
        }

        if($data == null)
        {
            $data = date("Y-m-d H:i:s");  
        }
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->data = $data;

    }

    public function pegarID(){
        return $this->id;
    }

    public function cadastro($conexao){
        $sql = "INSERT INTO usuarios (id_us, nome_us, email_us, senha_us, criacao_us, tipo_us) VALUES (? ,? ,? ,? ,? ,?)";
        $param = [$this->id , $this->nome, $this->email, $this->senha, $this->data, 0];

        $retorno = $conexao->executar($sql, $param);
        return $retorno;
    }
}


?>