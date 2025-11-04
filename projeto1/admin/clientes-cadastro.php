<?php
include_once "config.inc.php";

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$plano = mysqli_real_escape_string($conexao, $_POST['plano']);

$sql = "INSERT INTO clientes (nome, email, plano) VALUES ('$nome', '$email', '$plano')";

if (mysqli_query($conexao, $sql)) {
    echo "<div class='msg sucesso'>Usuário cadastrado com sucesso!</div>";
} else {
    echo "<div class='msg erro'>Erro ao cadastrar: " . mysqli_error($conexao) . "</div>";
}

echo "<a href='clientes-admin.php' class='btn'>Voltar</a>";
?>


