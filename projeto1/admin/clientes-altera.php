<?php
include_once "config.inc.php";

$id = $_POST['id'];
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$plano = mysqli_real_escape_string($conexao, $_POST['plano']);

$sql = "UPDATE clientes SET nome='$nome', email='$email', plano='$plano' WHERE id=$id";

if (mysqli_query($conexao, $sql)) {
    echo "<div class='msg sucesso'>Usuário atualizado com sucesso!</div>";
} else {
    echo "<div class='msg erro'>Erro ao atualizar: " . mysqli_error($conexao) . "</div>";
}

echo "<a href='clientes-admin.php' class='btn'>Voltar</a>";
?>
