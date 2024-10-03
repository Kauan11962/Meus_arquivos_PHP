<?php
	class Aluno
	{
		public function __construct(private string $restricoes = "", private string $data_nascimento = ""){}
		
		public function getRestricoes()
		{
			return $this->restricoes;
		}
		public function getData_nascimento()
		{
			return $this->data_nascimento;
		}
		
		public function setRestricoes($restricoes)
		{
			$this->restricoes = $restricoes;
		}
		public function setData_nascimento($data_nascimento)
		{
			$this->data_nascimento = $data_nascimento;
		}
	}//fim da classe
?>