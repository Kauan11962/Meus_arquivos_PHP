<?php
    require_once "produto.class.php";
    require_once "fornecedor.class.php";

    //Um fornecedor quais os produtos fornece

    $produto1 = new Produto("Sketchbook", "Sketchbook com folhas lisas", 32.50, 956);
    $produto2 = new Produto("Sketchbook", "Sketchbook com folhas com linhas", 29.9, 1000);
    
    $fornecedor = new Fornecedor("Tilibra", "Tilibra", "11.111.111/0001-23", "(16)99741-1811", array($produto1,$produto2));
    

    $produto3 = new Produto ("garrafa", "Garrafa da Olivia Rodrigo",340, 18);

    $fornecedor ->setProduto($produto3);



    /*echo"<pre>";
    var_dump ($fornecedor);
    echo"</pre>";*/

    echo "<h3>Fornecedor</h3>";
    echo "Razão Social: {$fornecedor->getRazao_social() }<br>";
    echo "Nome Fantasia: {$fornecedor->getNome_fantasia()}<br>";
    echo "CNPJ: {$fornecedor->getCpnj()}<br>";
    echo "Telefone: {$fornecedor->getTelefone()}<br>";

    echo "<h4>Produtos</h4>";

    foreach($fornecedor->getProduto() as $produto)
    {
        echo "Nome: {$produto->getNome()}<br>";
        echo "Descrição: {$produto->getDescricao()}<br>";
        echo "Preço: " . number_format($produto->getPreco(), 2, ", ",".") . "<br>";
        echo "Estoque: {$produto->getEstoque()}<br><br>";
    }

    //Um produto, quais fornecedores o fornece

    $fornecedor1 = new Fornecedor("Pilot", "Pilot", "22.222.222/0001-22", "(11)99323-222");
    $fornecedor2 = new Fornecedor("Faber Castel", "Faber Castel", "33.333.333/0001-33", "(11)9798-7777");

    $produto4 = new Produto("Borracha", "Borracha Macia que não borra", 3.2, 2500, array($fornecedor1, $fornecedor2));

    echo "<h3>Produto</h3>";
    echo "Nome: {$produto4->getNome()}<br>";
    echo "Descrição: {$produto4->getDescricao()}<br>";
    echo "Preço: " . number_format($produto4->getPreco(), 2, ",",".") . "<br>";

    echo "<h4>Fornecedor do Produto</h4>";

    foreach($produto4->getFornecedor() as $objeto)
    {
        echo "Razão Social: {$objeto->getRazao_social()}<br>";
        echo "Nome Fantasia: {$objeto->getNome_fantasia()}<br>";
        echo "CNPJ: {$objeto->getCpnj()}<br>";
        echo "Telefone: {$objeto->getTelefone()}<br><br>";
    }
?>