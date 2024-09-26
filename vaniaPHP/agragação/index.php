<?php
    require_once "categoria.class.php";
    require_once "produto.class.php";

    //De uma categoria quais os produtos pertencem a ela 

    $produto1 = new Produto("lápis Preto", "Lápis Preto", 2.5, 100);

    $produto2 = new Produto("Caderno", "Caderno em espiral 200fl", 20.0, 1100);

    $categoria = new Categoria("Material Escolar", array($produto1, $produto2));

    /*echo "<phe>";
        var_dump($categoria);
    echo "</pre>";*/
    
    echo '<h3>Categoria</h3>';
    echo "Descritivo: {$categoria->getDescritivo()}<br>";

    echo '<h4>Produto</h4>';

    foreach($categoria->getProduto() as $obj_produto)
    {
        echo "Nome: {$obj_produto->getNome()}<br>";
        echo "Preço: R$ " . number_format($obj_produto->getPreco(), 2, ",",".") . "<br><br>";
    }

    //de um produto a qual categoria pertence

    $categoria = new Categoria("Material de Escritório");
    $produto3 = new Produto("Agenda", "Agenda 2024", 30, 100, $categoria);

    echo "<h3>Produto</h3>";
    echo "Nome: {$produto3->getNome()}<br>";
    echo "Descrição: {$produto3->getDescricao()}<br>";
    echo "Estoque: {$produto3->getEstoque()}<br>";
    echo "Preço: R$ " . number_format($produto3->getPreco(), 2, ",", "." ). "<br>";
    echo "Categoria: {$produto3->getCategoria()->getDescritivo()}<br>";
?>