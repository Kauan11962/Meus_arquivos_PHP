<?php
    class Atuacao
    {
        public function __construct(
            private string $papel = '',
            private Filme $filme = new Filme(),
            private Ator $ator = new Ator()
        ){}

        public function getPapel()
        {
            return $this->papel;
        }

        public function getFilme()
        {
            return $this->filme;
        }

        public function getAtor()
        {
            return $this->ator;
        }
    }
?>