<?php
    class Horario 
    {
        public function __construct(
            private string $data = "",
            private string $hora = "",
            private Consulta $horario = new Consulta()
        ){}

        public function getData()
        { return $this->data; }

        public function getHora()
        { return $this->hora; }

        public function getConsulta()
        { return $this->consulta; }
    }
?>