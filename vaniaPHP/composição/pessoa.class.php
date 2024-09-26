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

        public function getNome()
        {
            return $this->nome;
        }

        public function setEdereco($logradouro, $numero, $cep, $pessoa)
        {
            $this->edereco[] = new Edereco($logradouro, $numero, $cep, $pessoa);
        }
    }//Fim da classe
?>