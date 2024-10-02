<?php
    class Pessoa
    {
        public function __construct(
            private string $nome = "",
            private array $endereco = array(), 
            string $logradouro = "", $numero = "", $cep = "", $pessoa = null 
        )
        {
            $this->endereco[] = new Endereco($logradouro, $numero, $cep, $pessoa);
        }

        public function getEndereco()
        {
            return $this->endereco;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setEndereco($logradouro, $numero, $cep, $pessoa)
        {
            $this->endereco[] = new Endereco($logradouro, $numero, $cep, $pessoa);
        }
    }//Fim da classe
?>