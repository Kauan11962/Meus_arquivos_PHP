<?php
    
    class Paciente
    {
        public function __construct(
            private string $nome = "",
            private string $rg = "",
            private string $endereco = "",
            private string $telefone = "",
            private string $data_de_nascimento = "",
            private string $profissao = "",
            private array $agenda = array()
        ){}

        public function getNome()
        { return $this->nome; }
        
        public function getRg()
        { return $this->rg; }
        
        public function getEndereco()
        { return $this->endereco; }
        
        public function getTelefone()
        { return $this->telefone; }
        
        public function getData_de_nascimento()
        { return $this->data_de_nascimento; }

        public function getProfissao()
        { return $this->profissao; }    

        public function setAgenda(Agenda $agenda)
        { $this->agenda = $agenda; }

        public function getAgenda()
        { return $this->agenda; }
    }
?>