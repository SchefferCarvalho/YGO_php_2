<?php
include('../../config.php');
include('../../inc/funcoesGerais.php');

$id = $_GET['id'];

$url = $indexAPI . '/tb_deck';
DeleteAPI($url, $id);
header('Location: '.$indexPHP.'/pages/deck/index.php');

