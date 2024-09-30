<?php
    class Endereco 
    {
        public function __construct(
            private string $logradouro = "",
            private string $numero = "",
            private string $cep = "",
            private $pessoa = null
        ){}

        public function getPessoa()
        {
            return $this->pessoa;
        }

        public function getLogradouro()
        {
            return $this->logradouro;
        }

        public function getNumero()
        {
            return $this->numero;
        }

        public function getCep()
        {
            return $this->cep;
        }

    }
?>