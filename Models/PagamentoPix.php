<?php

class PagamentoPix{
    //MODEL RESPONSAVEL POR GERERAR CODIGO PIX 
 
    /** IDs DO PAYLOAD PIX - DESTINATARIO
     * @var string
     */
    //VALORES PRE SETADOS COM BASE NA DOCUMENTACAO DO BANCO CENTRAL
        const ID_PAYLOAD_FORMAT_INDICATION = "00";
        const ID_MERCHANT_ACCOUNT_INFORMATION = "25";
        const ID_MERCHANT_ACCOUNT_INFORMATION_GUI = "00";
        const ID_MERCHANT_ACCOUNT_INFORMATION_KEY = "01";
        const ID_MERCHANT_ACCOUNT_INFORMATION_DESCRIPTION = "02";
        const ID_MERCHANT_CATEGORY_CODE = "52";
        const ID_TRANSACTION_CURRENCY = "53";
        const ID_TRANSACTION_AMOUNT = "54";
        const ID_COUNTRY_CODE = "58";
        const ID_CMERCHANT_NAME = "59";
        const ID_CMERCHANT_CITY = "60";
        const ID_ADDITIONAL_DATA_FIELD_TEMPLATE = "62";
        const ID_ADDITIONAL_DATA_FIELD_TEMPLATE_TXID = "05";
        const ID_CRC16 = "16";
   

      /** IDs DO PAYLOAD PIX - DESTINATARIO
     * @var string
     */
        private $chave_pix; // SE CHAVE FOR TELEFONE NAO ESQUECER DO DDD COMPLETO (+5518)
        private $descricao;
        private $nome_titular_conta;
        private $cidade_titular_conta;
        private $id_transacao;
        private $valor_transacao;

     public function setChave($chave){
        $this->chave_pix = $chave;
        return $this;
     }

     public function setDescricao($descricao){
        $this->descricao = $descricao;
        return $this;
    }

    public function setNome($nometitular){
        $this->nome_titular_conta = $nometitular;
        return $this;
    }

    public function setCidade($cidade){
        $this->cidade_titular_conta = $cidade;
        return $this;
    }

    public function setId($id){
        $this->id_transacao = $id;
        return $this;
    }

    public function setValor($valor){
        $this->valor_transacao = $valor;
        return $this;
    }

    private function pegarValor($id, $valor){
        //CADA ATRIBUTO DA CLASSE DEVE PASSAR POR ESTE METODO, POIS ELE E RESPONSAVEL POR TRANFORMAR DE FORMA QUE O PIX IDENTIFIQUE
        $tamanho = str_pad(strlen($valor), 2, '0', STR_PAD_LEFT);
        return $id.$tamanho.$valor;
    }


}


?>