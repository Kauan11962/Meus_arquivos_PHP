<?php
    require_once "Agenda.class.php";
    require_once "Paciente.class.php";
    require_once "Horario.class.php";
    require_once "Consulta.class.php";
    require_once "Servico.class.php";

    $paciente = new Paciente("Kauan", "555,555,555-23", "Minha casa", "14 99999.9999", "01/10/0100", "NA");

    $Agenda = new Agenda("2023", $paciente);

    $servico = new Servico("Limpeza", 70.00);
    $servico2 = new Servico("Cirurgia", 50.00);

    $consulta = new Consulta ("1", array($servico,$servico2));

    $horario = new Horario("02/05/2024", "14:00", $consulta );

    echo "<h3>Agenda de Paciente<h3>";
    echo "Nome:  {$paciente->getNome() }<br> ";
    echo "RG: {$paciente->getRg() }<br>";
    echo "Endereço: {$paciente->getEndereco() }<br>";
    echo "Telefone: {$paciente->getTelefone() }<br>";
    echo "data de Nascimento: {$paciente->getData_de_nascimento() }<br>";
    echo "profissão: {$paciente->getProfissao() }<br>"; 
    echo "Ano agenda: {$Agenda->getAno() }<br>";
    echo "Data da consulta: {$horario->getHora() }<br>";
    echo "Horário da consulta: {$horario->getData() }<br>";
    echo "id histórico: {$consulta->getHistorico() }<br>";
    echo "<h3>Serviços<h3>";
    echo "Descrição: {$servico->getDescricao() }<br>";
    echo "Preço: {$servico->getPreco() } reias<br>";
?>