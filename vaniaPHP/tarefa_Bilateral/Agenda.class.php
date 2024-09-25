<?php

    class Agenda 
    {
        public function __construct(
            private string $ano = "",
            private Paciente $agenda = new Paciente()        
        ){}

        public function getAno()
        { return $this->ano; } 
        
        public function getPaciente()
        { return $this->paciente; }
    }
?>