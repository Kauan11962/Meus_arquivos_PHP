<?php
    class Telefone 
    {
        public function __construct(
            public int $ddd = 0,
            public string $numero = "",
            protected $pessoa = null
        ){}

        public function getDDD()
        { return $this -> ddd; }

        public function getNumero()
        { return $this -> numero; }
    }
?>