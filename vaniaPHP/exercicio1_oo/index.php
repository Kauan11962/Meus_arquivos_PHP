<?php
    require_once "Pessoa.class.php";
    require_once "Aluno.class.php";
    require_once "Aparelho.class.php";
    require_once "Instrutor.class.php";
    require_once "Telefone.class.php";
    require_once "Treino.class.php";

    $instrutor = new Instrutor('Cardio', 'Tiago Casale Budin', '57318527827', 14, 997755461);
    $instrutor -> setTelefone(14, 990023453, null);

    $aluno = new Aluno('Problema no joelho esquerdo', '11/04/2005', 'Sueli', '08365556863', 14, 996602343);

    $aparelho = new Aparelho('Mesa Romana');
    
    $treino = new Treino(3, 20, $instrutor, $aluno, $aparelho);

    //ALUNO
    echo "<h3>TREINO</h3>";
    echo "Nome do Aluno: {$treino -> getAluno() -> getNome()}<br>";
    echo "CPF do Aluno: {$treino -> getAluno() -> getCpf()}<br>";

    echo '<h3>TELEFONES DO ALUNO</h3>';
    foreach($treino -> getAluno() -> getTelefone() as $telefone)
    {
        echo "({$telefone -> getDdd()}) {$telefone -> getNumero()}<br>";
    }

    echo "<hr>";
    //INSTRUTOR
    echo "<h3>TREINO</h3>";
    echo "Nome do Instrutor: {$treino -> getInstrutor() -> getNome()}<br>";
    echo "CPF do Instrutor: {$treino -> getInstrutor() -> getCpf()}<br>";

    echo "<h3>TELEFONES DO INSTRUTOR</h3>";
    foreach($treino -> getInstrutor() -> getTelefone() as $telefone)
    {
        echo "({$telefone -> getDdd()}) {$telefone -> getNumero()}<br>";
    }

    echo "Aparelho: {$treino -> getAparelho() -> getDescritivo()}<br>";

    echo "Séries: {$treino -> getRepeticoes()}<br>";
?>