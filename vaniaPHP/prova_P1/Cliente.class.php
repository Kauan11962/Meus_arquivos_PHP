<?php
    class Cliente extends Pessoa
    {
        public function __construct(
            public string $cpf = "",
            string $nome,
            int $ddd = 0,
            string $numero = "",
            $pessoa = null,
            private array $telefone = array()
        )
        {
            parent::__construct($nome);

            $this->telefone[] = new Telefone( $ddd, $numero, $pessoa);

        }

        public function getCpf()
        { return $this -> cpf; }

        public function setCpf($cpf)
        { $this -> cpf = $cpf; }

        public function getTelefone()
        { return $this -> telefone; }

        public function setTelefone( int $ddd = 0, string $numero = "")
        { $this -> telefone[] = new Telefone( $ddd, $numero, $pessoa); }
    }
?>