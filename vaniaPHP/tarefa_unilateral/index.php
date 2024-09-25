<?php
    require_once "produto.class.php";
    require_once "fornecedor.class.php";    

    $fornecedor = new Fornecedor("Faber Castel", "Faber Castel", "11111111", "(11)999949494");

    $produto = new Produto("Régua T", "Régua para engenharia", 100, 1000, $fornecedor);

    //echo"<pre>";
    //var_dump($produto);
    //echo"</pre>";

   echo "<h3>Produtos<h3>";
   
   echo "Nome:  {$produto->getNome() }<br> ";
   echo "Descrição: {$produto->getDescricao()}<br>";
   echo "Preço: {$produto->getPreco()}<br>";
   echo "estoque: {$produto->getEstoque()}<br>";

   echo "<h3>Fornecedor<h3>";
   echo "Razão Social: {$fornecedor->getRazao_social()}<br>";
   echo "Nome Empresa: {$fornecedor->getNome_fantasia()}<br>";
   echo "CNPJ: {$fornecedor->getCpnj()}<br>";
   echo "Telefone: {$fornecedor->getTelefone()}<br>";
?> 