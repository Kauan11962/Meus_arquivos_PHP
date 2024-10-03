<?php
    class Filme
    {
        public function __construct(
            private string $titulo = '',
            private string $sinopse = ''
        ){}

        public function getTitulo()
        {
            return $this->titulo;
        }

        public function getSinopse()
        {
            return $this->sinopse;
        }
    }
?>