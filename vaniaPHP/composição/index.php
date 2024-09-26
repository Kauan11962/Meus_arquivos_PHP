<?php
    require_once "pessoa.class.php";
    require_once "edereco.class.php";

    //endereço a quem pertence

    $pessoa = new Pessoa("Paulo");

    $endereco = new Endereco("XV de Novembro", "123", "17289383", $pessoa);

    //pessoa colocar os endereços dela

    $pessoa = new Pessoa(nome: "Ana", logradouro: "7 de setembro", numero: "44", cep: "17444334");

    echo "<pre>";
    var_dump($pessoa);
    echo "</pre>";
?>