<?php
	class Treino
	{
		public function __construct(private int $series = 0, private int $repeticoes = 0){}
		
		public function getSeries()
		{
			return $this->series;
		}
		
		public function getRepeticoes()
		{
			return $this->repeticoes;
		}
				
		public function setSeries($series)
		{
			$this->series = $series;
		}
		public function setRepeticoes($repeticoes)
		{
			$this->repeticoes = $repeticoes;
		}
		
	}//fim da classe
?>