<?php
	class Treino
	{
		public function __construct(
			private int $series = 0, 
			private int $repeticoes = 0,
			private $instrutor = null,
			private $aluno = null,
			private $aparelho = null){}
		
		public function getSeries()
		{
			return $this -> series;
		}
		
		public function getRepeticoes()
		{
			return $this -> repeticoes;
		}

		public function getInstrutor(){
			return $this -> instrutor;
		}

		public function getAluno(){
			return $this -> aluno;
		}

		public function getAparelho(){
			return $this -> aparelho;
		}
				
		public function setSeries($series)
		{
			$this -> series = $series;
		}
		public function setRepeticoes($repeticoes)
		{
			$this -> repeticoes = $repeticoes;
		}
		
	}//fim da classe
?>