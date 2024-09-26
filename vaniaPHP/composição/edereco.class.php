<?php
    class Endereco 
    {
        public function __construct(
            private string $logradouto = "",
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
            return $this->getLogradouro;
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