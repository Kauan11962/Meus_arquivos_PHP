<?php
// Com $_POST['name-do-input'] conseguimos resgatar o que foi enviado pelo formulario

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == 'admin' && $senha == 'admin'){
    header('location: https://www.cps.sp.gov.br');
} else if ($usuario == 'user' && $senha == 123456) {
    echo "Usuário logado com sucesso: ";
}else{
    echo "Usuário e senha inválidos!";
}

?>