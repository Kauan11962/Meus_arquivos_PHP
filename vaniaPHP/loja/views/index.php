<?php   
    $msg = array("","");
    if($_POST)
    {
        require_once "../models/Conexao.class.php";
        require_once "../models/Usuario.class.php";
        require_once "../models/UsuarioDAO.class.php";

        $erro = false;
        if(empty($_POST["email"]))
        {
            $msg[0] = "Preencha o e-mail";
            $erro = true;
        }
        if(empty($_POST["senha"]))
        {
            $msg[1] = "Preencha a senha";
            $erro = true;
        }
        if(!$erro)
        {
            //verificar no Banco de Dados
            $usuario = new Usuario(email:$_POST['email'], senha:md5($_POST['senha']));

            $usuarioDAO = new usuarioDAO();
            $retorno = $usuarioDAO->login($usuario);

            echo "<pre>";
            var_dump($retorno);
            echo "</pre>";
        }
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset = 'UTF-8' />
        <title>Gerenciador de Tarefas</title>
    </head>
    <body>
        <h1>loja</h1>
        <form action='#' method='post'>
            <fieldset>
                <legend>BD loja</legend>
                <label>
                    email:
                    <input type='text' name='email' />
                </label>
                <div><?php echo $msg[0] ?><div>
                <label>
                    senha:
                    <input type='password' name='senha'/>
                </label>
                <div><?php echo $msg[1] ?><div>
                <input type='submit' value='ENVIAR'>
            </fieldset>    
        </form>
</html>

