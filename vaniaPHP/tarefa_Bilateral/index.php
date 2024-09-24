<?php
    require_once "Agenda.class.php";
    require_once "Paciente.class.php";

    $paciente = new Paciente("Kauan", "555,555,555-23", "Minha casa", "14 99999.9999", "01.10.0100", "NA");

    $Agenda = new Agenda("2023", $paciente);

    echo "<h3>Agenda de Paciente<h3>";
    echo "Nome:  {$paciente->getNome() }<br> ";
    echo "RG: {$paciente->getRg() }<br>";
    echo "Endereço: {$paciente->getEndereco() }<br>";
    echo "Telefone: {$paciente->getTelefone() }<br>";
    echo "data de Nascimento: {$paciente->getData_de_nascimento() }<br>";
    echo "profissão: {$paciente->getProfissao() }<br>"; 
    echo "Ano agenda: {$Agenda->getAno() }<br>";
?>