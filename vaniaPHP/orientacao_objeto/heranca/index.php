<?php
	require_once "Conta.class.php";
	require_once "Corrente.class.php";
	require_once "Poupanca.class.php";
	
	$corrente = new Corrente(1000.00, "123-2", "12345-6", "Maria da Silva", 5000.00);
	
	echo $corrente->getTitular(). "<br>";
	
	$corrente->retirar(3000);
	
	echo $corrente->getSaldo() . "<br>";
	
	
	$poupanca = new Poupanca(1, "432-1", "6543-2", "Paulo Rocha", 10000.00);
	
	$poupanca->retirar(11000);
	
	echo $poupanca->getSaldo();
	
	
	//classe abstrata não tem instância
	//$conta = new Conta();
	
	/*echo "<pre>";
	var_dump($corrente);
	echo "</pre>";*/
	
	
?>