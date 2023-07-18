<?php
class Produto{

    private $id;
    private $titulo;
    private $descricao;
    private $valor;
    private $quantidade;
    private $tipo;
    

    public function __construct($titulo, $descricao, $valor, $quantidade, $tipo){
        $this->id = null;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
        $this->tipo = $tipo;
    }

    public function cadastrar($conexao){
        $sql = "";
        $param = [];
        $retorno = $conexao->executar($sql, $param);
        return $retorno;
    }

}
?>