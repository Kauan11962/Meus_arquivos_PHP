<?php
    class Festa
    {
        public function __construct(
            public string $data_contrato = "",
            public string $data_festa = "",
            public float $valor = 0,
            public $cliente = null,
            private array $contratado = array(),
            private array $decoracao = array()
        ){}

        public function getData_contrato()
        { return $this -> data_contrato; }

        public function setData_contrato($data_contrato)
        { $this -> data_contrato = $data_contrato; }

        public function getData_festa()
        { return $this -> data_festa; }

        public function setData_festa($data_festa)
        { $this -> data_festa = $data_festa; }

        public function getValor()
        { return $this -> valor; }

        public function setValor($valor)
        { $this -> valor = $valor; }

        public function getCliente()
        { return $this -> cliente; }

        public function setClient()
        { $this -> cliente = $cliente; }

        public function getContratados()
        { return $this -> contratados; }

        public function setContratado($contratado)
        { $this -> contratados[] = $contratado; }

        public function getDecoracao()
        { return $this -> decoracao; }

        public function setDecoracao($decoracao)
        { $this -> decoracao[] = $decoracao; }

    }
?>