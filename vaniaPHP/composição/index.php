<?php
    require_once "pessoa.class.php";
    require_once "edereco.class.php";

    //endereço a quem pertence

    $pessoa = new Pessoa("Paulo");

    $endereco = new Endereco("XV de Novembro", "123", "17289383", $pessoa);

    //pessoa colocar os endereços dela

    $pessoa2 = new Pessoa(nome: "Ana", logradouro: "7 de setembro", numero: "44", cep: "17444334");

    $pessoa3 = new Pessoa("Ana",array(),"7 de setembro", "44", "17444334");
	
	$pessoa2->setEndereco("Rua Ramos", "15", "17654321", null);

    /*echo "<pre>";
    var_dump($pessoa);
    echo "</pre>";*/

    /*
    echo "<pre>";
    var_dump($pessoa2);
    echo "</pre>";
    */

    echo "Nome: {$pessoa->getNome()}<br>";
    echo "Logradouro: {$endereco->getLogradouro()}<br>";
    echo "Numero: {$endereco->getNumero()}<br>";
    echo "Cep: {$endereco->getCep()}<br>";
    echo "<br><br>";
    echo "Nome: {$pessoa2->getNome()}<br>";
    
    foreach ($pessoa2->getEndereco() as $endereco) {
        echo "Endereço: " . $endereco->getLogradouro() . ", " . $endereco->getNumero() . ", CEP: " . $endereco->getCep() . "<br>";
    };

    echo "<br><br>";
    echo "Nome: {$pessoa3->getNome()}<br>";
    foreach ($pessoa3->getEndereco() as $endereco) {
        echo "Endereço: " . $endereco->getLogradouro() . ", " . $endereco->getNumero() . ", CEP: " . $endereco->getCep() . "<br>";
    };

    //da pra exibir ambos códigos do mesmo jeito 
?>