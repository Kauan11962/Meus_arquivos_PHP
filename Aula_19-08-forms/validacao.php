<?php
// a função isset($variavel verifica se a variavel existe)
if(isset($_POST['nome'])){
    //forma 1 - Maior e demorada
    if($_POST['nome'] == ""){
        $nome = "VAZIO";
    }else{
        $nome = $_POST['nome'];
    }
    //forma 2 - Rápido
    // $var = condição ? se for verdadeiro : se falso;
    $peso = ($_POST['peso'] == "") ? 0 : $_POST['peso'];
    $altura = ($_POST['altura'] == "") ? 0 : $_POST['altura'];


    $imc = $peso / ($altura * $altura);
}
?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
  
<div class="container mt-3">
    <div class="card" style="width: 50%;">

        <form action="validacao.php" method="POST">

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="peso">Peso:</label>
                        <input type="number" name="peso" id="peso" class="form-control" step="0.01">
                    </div>
                    <div class="col">
                        <label for="altura">Altura:</label>
                        <input type="number" name="altura" id="altura" class="form-control" step="0.01">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-danger">CALCULAR IMC</button>
        </form>
    
    </div>
    
    <?php
    if (isset($imc)){
    ?>
    <div class="alert alert-primary mt-5" role="alert">
        IMC Calculado: <?= $imc ?>
    </div>
    <?php
    }
    ?>
</div>

</body>
</html>