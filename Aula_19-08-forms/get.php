<?php

// Com $_GET['name-do-input'] conseguimos resgatar o que foi enviado pelo formulario
$nome = $_GET['nome'];
$anoNascimento = $_GET['ano'];
$tipoUsuario = $_GET['tipo'];
$email = $_GET['email'];
$cidade = $_GET['cidade'];

echo "Nome enviado: " . $nome . "<br>";
echo "Ano enviado: " . $anoNascimento . "<br>";
echo "Idade calculada: " . (2024 - $anoNascimento) . "<br>";
echo "Tipo de Usuário enviado: " . $tipoUsuario . "<br>";

if($tipoUsuario == 'admin'){
    echo "<p>O Administrador pode fazer qualquer alteração!<p>";
}else if ($tipoUsuario == 'user'){
    echo "<p> Usuário só pode visualizar dados!<p>";
}else{
    echo "Tipo de Usuário inválido";
}

echo "E-mail enviado: " . $email. "<br>";
echo "Cidade enviada: " . $cidade . "<br>";

?>