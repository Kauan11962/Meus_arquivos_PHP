<?php
	class Corrente extends Conta
	{
		public function __construct(private float $limite = 0.00, $agencia, $numero, $titular, $saldo)
		{
			parent:: __construct($agencia, $numero, $titular, $saldo);
		}
		
		//get e set
		public function getLimite()
		{
			return $this->limite;
		}
		
		public function setLimite($limite)
		{
			$this->limite = $limite;
		}
		
		public function retirar($valor)
		{
			if($valor <= $this->saldo + $this->limite)
			{
				parent:: retirar($valor);
			}
			else
			{
				echo "Saldo Insuficiente";
			}
		}
	
	}//fim da classe
?>