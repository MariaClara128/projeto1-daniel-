<?php

    include_once "topo.php";
    include_once "menu.php";

 if (empty($_SERVER["QUERY_STRING"])) {
    $var = "conteudo";
    include_once "$var.php";
} else {
    $pg = $_GET['pg'];

    // Remove extensão se já tiver .php
    $pg = str_replace(".php", "", $pg);

    include"$pg.php";
}