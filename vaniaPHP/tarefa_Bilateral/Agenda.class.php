<?php

    class Agenda 
    {
        public function __construct(
            private string $ano = "",
            private Paciente $paciente = null
        ){}

        public function getAno()
        { return $this->ano; } 
        
        public function setPaciente()
        { $this->paciente = $paciente; }

        public function getPaciente()
        { return $this->paciente; }
    }
?>