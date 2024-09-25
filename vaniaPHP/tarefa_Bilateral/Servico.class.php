<?php
    class Servico 
    {
        public function __construct(
            private string $descricao = "",
            private float $preco = 0.00,
            private array $consulta = array()
        ){}

        public function getDescricao()
        { return $this->descricao; }

        public function getPreco()
        { return $this->preco; }

        public function getConsulta()
        {return $this->consulta;}
        
        public function setConsulta(Consulta $consulta)
        {$this->consulta[] = $consulta;}
    }
?> 