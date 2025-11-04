<?php include_once "config.inc.php"; ?>
<link rel="stylesheet" href="../assets/css/streamon.css">

<div class="form-container">
    <h2>Cadastrar Usuário</h2>
    <form method="post" action="clientes-cadastro.php">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Plano:</label>
        <select name="plano" required>
            <option value="Básico">Básico</option>
            <option value="Padrão">Padrão</option>
            <option value="Premium">Premium</option>
        </select>

        <button type="submit" class="btn">Cadastrar</button>
    </form>
</div>
