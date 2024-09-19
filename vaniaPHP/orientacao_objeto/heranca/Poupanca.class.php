<?php
	//uma classe final não pode ter filhos
	final class Poupanca extends Conta
	{
		public function __construct(private int $aniversario = 0, $agencia, $numero, $titular, $saldo)
		{
			parent:: __construct($agencia, $numero, $titular, $saldo);
		}
		
		//get e set
		public function getAniversario()
		{
			return $this->aniversario;
		}
		
		public function setAniversario($aniversario)
		{
			$this->aniversario = $aniversario;
		}
		public function retirar($valor)
		{
			$data_atual = explode("/",date("d/m/Y"));
			if($this->aniversario > $data_atual[0])
			{
				echo "Você perdeu os rendimentos";
			}
			if($this->saldo >= $valor)
			{
				parent:: retirar($valor);
			}
			else
			{
				echo "Saldo Insuficiente na Poupança";
			}
			
		}
	}//fim da classe
?>