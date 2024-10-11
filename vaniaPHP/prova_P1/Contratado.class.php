<?php
    class Contratado extends Pessoa 
    {
        public function __construct(
            public string $cnpj = "",
            string $nome = "",
            private $festa = null,
            int $ddd = 0,
            string $numero = "",
            $pessoa = null
        )
        {
            parent::__construct($nome);

            $this->telefone[] = new Telefone( $ddd, $numero, $pessoa);

        }

        public function getCnpj()
        { return $this -> cnpj; }

        public function setCnpj($cnpj)
        { $this -> cnpj = $cnpj; }

        public function getFesta()
        { return $this -> festa; }

        public function getTelefone()
        { return $this -> telefone; }

        public function setTelefone( int $ddd = 0, string $numero = "")
        { $this -> telefone[] = new Telefone( $ddd, $numero, $pessoa); }

    }
?>