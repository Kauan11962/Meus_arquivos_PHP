<?php 
    session_start();

    if(isset($_GET['nome']) && $_GET['nome'] != ''){
        $tarefa = array();

        $tarefa['nome'] = $_GET['nome'];

        if(isset($_GET['descricao'])){
            $tarefa['descricao'] = $_GET['descricao'];
        } else {
            $tarefa['descricao'] = '';
        }

        if(isset($_GET['prazo'])){
            $tarefa['prazo'] = $_GET['prazo'];
        } else {
            $tarefa['prazo'] = '';
        }

        if(isset($_GET['propriedade'])){
            $tarefa['propriedade'] = $_GET['propriedade'];
        } else {
            $tarefa['propriedade'] = '';
        }

        if(isset($_GET['concluida'])){
            $tarefa['concluida'] = $_GET['concluida'];
        } else {
            $tarefa['concluida'] = '';
        }
      
        $listar_tarefas = isset($_SESSION['listar_tarefas']) ? $_SESSION['listar_tarefas'] : [];
    }

    include "tamplate.php";
?>