<?php

class PagamentoPix{
    //MODEL RESPONSAVEL POR GERERAR CODIGO PIX 
 
    /** IDs DO PAYLOAD PIX - DESTINATARIO
     * @var string
     */
        const ID_PAYLOAD_FORMAT_INDICATION = "00";
        const ID_MERCHANT_ACCOUNT_INFORMATION = "00";
        const ID_MERCHANT_ACCOUNT_INFORMATION_GUI = "00";
        const ID_MERCHANT_ACCOUNT_INFORMATION_KEY = "00";
        const ID_MERCHANT_ACCOUNT_INFORMATION_DESCRIPTION = "00";
        const ID_MERCHANT_CATEGORY_CODE = "00";
        const ID_TRANSACTION_CURRENCY = "00";
        const ID_TRANSACTION_AMOUNT = "00";
        const ID_COUNTRY_CODE = "00";
        const ID_CMERCHANT_NAME = "00";
        const ID_CMERCHANT_CITY = "00";
        const ID_ADDITIONAL_DATA_FIELD_TEMPLATE = "00";
        const ID_ADDITIONAL_DATA_FIELD_TEMPLATE_TXID = "00";
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


}


?>