<?php
echo "Painel administrativo";
?>

<nav>
    <a href="index.php">Início</a>
    <a href="?pg=clientes-admin">Clientes</a>
    <a href="?pg=paginas-admin">Administrar Páginas</a>
    <a href="?pg=contato-admin">Administrar Contatos</a>
</nav>

<?php
// Conteúdo
if (empty($_SERVER["QUERY_STRING"])) {
    $var = "principal";
    $arquivo = "$var.php";
} elseif (!empty($_GET['pg'])) {
    $pg = basename($_GET['pg']); // segurança
    $arquivo = "$pg.php";
} else {
    $arquivo = null;
}

// Inclui o arquivo, se existir
if ($arquivo && file_exists($arquivo)) {
    include_once($arquivo);
} else {
    echo "<h3 style='color:red;'>Página não encontrada!</h3>";
}
?>

