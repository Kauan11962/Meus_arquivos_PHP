<?php 
    session_start();

    if(isset($_GET['nome']))
    {
        $_SESSION['$listar_tarefas'][] = $_GET['nome'];
    }

    if(isset($_SESSION['$listar_tarefas']))
    {
        $listar_tarefas = $_SESSION['$listar_tarefas'];
    }else
    {
        $listar_tarefas = array();
    }

    include "tamplate.php";
?>