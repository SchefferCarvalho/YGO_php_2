<?php 
include('./config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$link = $indexAPI.'/confere-usuario/'.$email.'/'.$password;

 $curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => $link,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
	    "cache-control: no-cache"
	  ),
	));

	$usuarios = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);

	$usuarios = json_decode($usuarios, true);

	// var_dump($usuarios);

	if (is_array($usuarios) & $usuarios != null) {
		$_SESSION['autenticado'] = true;
		header('Location: '.$indexPHP.'/pages/painel/index.php');
	} else {
		header('Location: '.$indexPHP.'/login-page?login=fail');
	}
 ?>
