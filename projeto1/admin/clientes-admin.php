<?php
include_once "config.inc.php";
$resultado = mysqli_query($conexao, "SELECT * FROM clientes ORDER BY id DESC");
?>
<link rel="stylesheet" href="../assets/css/streamon.css">

<h2>Usuários Cadastrados</h2>
<a href="clientes-cadastro-form.php" class="btn">+ Novo Usuário</a>

<table class="tabela">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Plano</th>
        <th>Ações</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['plano'] ?></td>
            <td>
                <a href="clientes-altera-form.php?id=<?= $row['id'] ?>" class="btn editar">Editar</a>
                <a href="clientes-excluir.php?id=<?= $row['id'] ?>" class="btn excluir">Excluir</a>
            </td>
        </tr>
    <?php } ?>
</table>
