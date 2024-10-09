<?php
	class Aluno extends Pessoa{
		public function __construct(
			private string $restricoes = "", 
			private string $data_nascimento = "",
			string $nome = "",
			string $cpf = "",
			int $ddd = 0,
			string $numero = "",
			$pessoa = null,
			private array $aparelho = array())
			{
				parent:: __construct($nome, $cpf, $ddd, $numero, $pessoa);
			}
		
		public function getRestricoes()
		{
			return $this -> restricoes;
		}
		public function getData_nascimento()
		{
			return $this -> data_nascimento;
		}

		public function getAparelho()
		{
			return $this -> aparelho;
		}
		
		public function setRestricoes($restricoes)
		{
			$this -> restricoes = $restricoes;
		}
		public function setData_nascimento($data_nascimento)
		{
			$this -> data_nascimento = $data_nascimento;
		}

		public function setAparelho($aparelho)
		{
			$this -> aparelho = $aparelho;
		}
	}//fim da classe
?>