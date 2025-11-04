<?php
include_once "config.inc.php";

$id = $_GET['id'];
$sql = "SELECT * FROM clientes WHERE id = $id";
$result = mysqli_query($conexao, $sql);
$cliente = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" href="../assets/css/streamon.css">

<div class="form-container">
    <h2>Alterar Usuário</h2>
    <form method="post" action="clientes-altera.php">
        <input type="hidden" name="id" value="<?= $cliente['id'] ?>">

        <label>Nome:</label>
        <input type="text" name="nome" value="<?= $cliente['nome'] ?>" required>

        <label>Email:</label>
        <input type="email" name="email" value="<?= $cliente['email'] ?>" required>

        <label>Plano:</label>
        <select name="plano" required>
            <option <?= $cliente['plano'] == 'Básico' ? 'selected' : '' ?>>Básico</option>
            <option <?= $cliente['plano'] == 'Padrão' ? 'selected' : '' ?>>Padrão</option>
            <option <?= $cliente['plano'] == 'Premium' ? 'selected' : '' ?>>Premium</option>
        </select>

        <button type="submit" class="btn">Salvar Alterações</button>
    </form>
</div>

?>
