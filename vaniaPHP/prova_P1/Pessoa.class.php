<?php
    class Pessoa extends Telefone
    {
        public function __construct(
            public string $nome = "",
            int $ddd = 0,
            string $numero = "",
            $pessoa = null,
            private array $telefone = array()
        )
        {
            $this->telefone[] = new Telefone( $ddd, $numero, $pessoa);
        }

        public function getNome()
        { return $this -> nome; }

        public function setNome()
        { $this -> nome = $nome; }

        public function getTelefone()
        { return $this -> telefone; }

        public function setTelefone( int $ddd = 0, string $numero = "")
        { $this -> telefone[] = new Telefone( $ddd, $numero, $pessoa); }
    }
?>