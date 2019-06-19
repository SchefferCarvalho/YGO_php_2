<?php 
include('./config.php');

session_start();

session_destroy();
header('Location: '.$indexPHP.'/pages/painel/index.php?logout=true');

?>