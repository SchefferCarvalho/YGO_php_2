<?php 
include('./config.php');
include('./inc/funcoesGerais.php');

$email = $_POST['email'];
$password = $_POST['password'];

$link = $indexAPI.'/confere-usuario/'.$email.'/'.$password;

$usuario = GetAPI($link);
// var_dump($usuario);
if (is_array($usuario) & $usuario != null) {
	$_SESSION['autenticado'] = true;
	$_SESSION['usuario'] = $usuario[0];
	header('Location: '.$indexPHP.'/pages/painel/index.php');
} else {
	header('Location: '.$indexPHP.'/login-page.php?login=fail');
}
 ?>
