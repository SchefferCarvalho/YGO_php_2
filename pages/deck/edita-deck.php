<?php
include('../../config.php');
include('../../inc/funcoesGerais.php');

if(isset($_POST['carta']) && isset($_POST['deck']) && isset($_POST['acao'])){
	$carta = $_POST['carta'];
	$deck = $_POST['deck'];
	$acao = $_POST['acao'];
}

if ($acao == 1) {
	$url = $indexAPI . '/tb_deck_carta';

	$dados['carta'] = $carta;
	$dados['deck'] = $deck;

	$_SESSION['carta-selecionada'] = $carta;
	$adicionar = PostAPI($url, $dados);

} elseif($acao == 2){
	$url = $indexAPI . '/tb_deck_carta/'.$deck.'/'.$carta;
	$_SESSION['carta-selecionada'] = $carta;
	$remover = DeleteAPI2($url);
}	

// echo $carta;
// echo $deck;
// echo $acao;

?>
