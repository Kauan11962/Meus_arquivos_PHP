<?php
	class Instrutor
	{
		public function __construct(private string $especialidade = ""){}
		
		public function getEspecialidade()
		{
			return $this->especialidade;
		}
				
		public function setEspecialidade($especialidade)
		{
			$this->especialidade = $especialidade;
		}
		
	}//fim da classe
?>