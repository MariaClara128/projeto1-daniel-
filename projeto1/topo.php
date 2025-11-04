<body>
<?php if (basename($_SERVER['PHP_SELF']) == 'index.php' && empty($_SERVER['QUERY_STRING'])): ?>
  <!-- ===== Abertura Netflix “MC” ===== -->
  <div id="intro">
    <div class="logoMC">
      <div class="letras">
        <span class="m">M</span><span class="c">C</span>
        <div class="brilho"></div>
      </div>
      <p class="nome">Maria Clara</p>
    </div>
  </div>
<?php endif; ?>

<!-- ===== Cabeçalho do site ===== -->
<header>
  <h1>StreamMC</h1>
  <nav>
    <a href="index.php">Início</a>
    <a href="?pg=quemsomos.php">Quem Somos</a>
    <a href="?pg=faleconosco.php">Fale Conosco</a>
    <a href="admin/clientes-admin.php">Usuários</a>
  </nav>
</header>

<!-- ===== CSS ===== -->
<link rel="stylesheet" href="assets/css/streamon.css">
<link rel="stylesheet" href="assets/css/intro.css">