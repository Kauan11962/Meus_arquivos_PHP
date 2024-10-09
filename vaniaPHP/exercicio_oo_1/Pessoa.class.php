<?php
	class Pessoa
	{
		public function __construct(protected string $nome = "", protected string $cpf = ""){}
		
		
		public function getNome()
		{
			return $this->nome;
		}
		public function getCpf()
		{
			return $this->cpf;
		}
		
		public function setNome($nome)
		{
			$this->nome = $nome;
		}
		public function setCpf($cpf)
		{
			$this->cpf = $cpf;
		}
	}//fim da classe
?>