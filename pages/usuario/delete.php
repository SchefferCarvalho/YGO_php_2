<?php
include('../../config.php');
include('../../inc/funcoesGerais.php');

$id = $_GET['id'];

$url = $indexAPI . '/tb_usuario';

DeleteAPI($url, $id);
header('Location: '.$indexPHP.'/pages/usuario/index.php');