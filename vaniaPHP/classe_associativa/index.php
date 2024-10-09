<?php
    require_once "filme.class.php";
    require_once "ator.class.php";
    require_once "atuacao.class.php";

    $filme = new Filme ("Harry Potter e a pedra filosofal", "Ele é um garoto orfão que vive infeliz com seus tios");

    $ator = new Ator("Daniel Radcliffe", "Britanico");

    $atuacao = new Atuacao("Harry Pottter", $filme, $ator);

    echo "<h3>Filme<h3>";
    echo "Titulos: {$atuacao->getFilme()->getTitulo()}<br>";
    echo "Sinopse: {$atuacao->getFilme()->getSinopse()}<br>";
    echo "Ator: {$atuacao->getAtor()->getNome()}<br>";
    echo "Nacinalidade: {$atuacao->getAtor()->getNacionalidade()}<br>";

    echo "Atuou como: {$atuacao->getPapel()}<br>";
?>