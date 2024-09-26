<?php session_start() ?>

<html>
    <head>
        <title>Cadastro</title>
    </head>

    <body>
        <h1>Formulario</h1>
    </body>
    <form>
        <fieldset>
            <legend>Formulario</legend>
            <label>
                Nome:
                <input type='text' name='nome'/>
            </label>
            <br>
            <label>
                Telefone:
                <input type='number' name='telefone'/>
            </label>
            <br>
            <label>
                Email:
                <input type='email' name='email' />
            </label>
            <br>
            <input type='submit' value='Cadastrar'/>
        </fieldset>   
    </form>
</html>

<?php 

    //Teste.
    /*if(isset($_GET['nome']))
    {
        echo 'nome: ' . $_GET['nome'] . '<br>';
    }

    if(isset($_GET['telefone']))
    {
        echo 'telefone: ' . $_GET['telefone'] . '<br>';
    }

    if(isset($_GET['email']))
    {
        echo 'email: ' . $_GET['email'] . '<br>';
    }*/
 
    $lista = array();

    if(isset($_GET['nome']))
    {
        $_SESSION['$lista'][] = $_GET['nome'];
    }

    if(isset($_GET['telefone']))
    {
        $_SESSION['$lista'][] = $_GET['telefone'];   
    }

    if(isset($_GET['email']))
    {
        $_SESSION['$lista'][] = $_GET['email'];
    }

    if(isset($_SESSION['$lista']))
    {
        $lista = $_SESSION['$lista'];
    }
?>

<html>
    <tr>
        <th>Seus dados <br> <th>
    </tr>

    <?php foreach($lista as $dados) : ?>

        <tr>
            <th><?php echo $dados . '<br>' ?><th>
        <tr>

    <?php endforeach ?>

</html>