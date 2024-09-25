<?php
    class Consulta
    {
        public function __construct(
            private string $historico = "",
            private array $horario = array(),
            private array $servico =  array()
        ){}

        public function getHistorico()
        { return $this->historico; }

        public function getHorario()
        { return $this->Horario; }

        public function getServico()
        {return $this->consulta;}
        
        public function setServico(Servico $servico)
        {$this->servico[] = $servico;}
    }
?>