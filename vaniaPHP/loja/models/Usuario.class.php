<?php
    class Usuario 
    {
        public function __construct(
            public int $id_usuario = 0,
            public string $nome = "",
            public string $email = "",
            public string $senha = ""
        ){}

        public function getId()
        {
            return $this -> id_usuario;
        }

        public function getNome()
        {
            return $this -> nome;
        }

        public function setNome()
        {
            $this -> nome = $nome;
        }

        public function getEmail()
        {
            return $this -> email;
        }

        public function setEmail()
        {
            $this -> email = $email;
        }

        public function getSenha()
        {
            return $this -> senha;
        }

        public function setSenha()
        {
            $this -> senha = $senha;
        }
    }
?>