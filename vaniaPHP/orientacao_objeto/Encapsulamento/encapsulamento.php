<?php
	require_once "Cliente.class.php";
	
	$cliente = new Cliente(1,"Vera", "234.234.234-23", "vera@gmail.com");
	
	echo $cliente->getNome() . "<br>";
	$cliente->setNome("Vilma");
	echo $cliente->getNome();
?>