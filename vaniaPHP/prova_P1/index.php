<?php 
    require_once "Telefone.class.php";
	require_once "Pessoa.class.php";
    require_once "Cliente.class.php";
    require_once "Contratado.class.php";
    require_once "Decoracao.class.php";
    require_once "Festa.class.php";

    $cliente = new Cliente("505.000.202-55", "zed");
    $telefone1 = new Telefone(14, "9999-4444");
    
    $contratado = new Contratado("05050.5555.55", "lucas"); 
    $telefone2 = new Telefone(14, "44449-4002");
   
    $decoracao = new Decoracao("balão e bolo");
    $decoracao1 = new Decoracao("mesa e cadeira");
    $festa = new Festa("10/05/2000", "10/05/2000", 2000);

    echo "<h1>Cliente<h1> ";
    echo "cpf: {$cliente->getCpf()}<br> ";
    echo "nome: {$cliente->getNome()}<br>";    
    echo "telefone: {$telefone1->getDDD()} {$telefone1->getNumero()}";

    echo "<h1>Festa<h1>";
    echo "contratado: <br> cnpj {$contratado->getCnpj()}<br> nome: {$contratado->getNome()}<br>" ;
    echo "telefone: {$telefone2->getDDD()} {$telefone2->getNumero()}<br>";

    echo "data contrato: {$festa->getData_contrato()} data festa: {$festa->getData_festa()}<br> valor: R$ {$festa->getValor()}<br> ";
    echo "decoracao: {$decoracao->getDescritivo()} mais {$decoracao1->getDescritivo()}";
?>