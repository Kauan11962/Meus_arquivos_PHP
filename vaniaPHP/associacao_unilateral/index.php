<?php
    require_once "produto.class.php";
    require_once "fornecedor.class.php";    

    $fornecedor = new Fornecedor("Faber Castel", "Faber Castel", "11111111", "(11)999949494");

    $produto = new Produto("Régua T", "Régua para engenharia", 100, 1000, $fornecedor);

    echo"<pre>";
    var_dump($produto);
    echo"</pre>";
?>