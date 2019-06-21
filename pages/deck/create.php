<?php include('../../config.php'); ?>
<?php include('../../inc/header.php');
verificarAutenticacao($indexPHP);

// if (1 ==  1 ) {
//  $dados['nome'] = 'Deck do Felipe';
//  $dados['usuario'] = '3';
//  $url = $indexAPI . '/tb_deck';

// PostAPI($url, $dados);
// }

?>

<div class="mx-auto mt-5 mb-5" style="width: 500px;">
  <!-- <form action="?=$indexPHP.'/pages/deck/'?>"> -->
  <h4 class="rounded bg-dark text-white text-center">
    <!-- <font size="5"> -->
    <b>
      Criar Deck
    </b>
    <!-- </font> -->
  </h4>
  <div class="form-group row">
    <label for="exampleInputEmail1">Nome do deck: </label>
    <input type="text" class="form-control" name="nome-deck" placeholder="Entre com o nome do Deck">
    <small id="emailHelp" class="form-text text-muted">Escolha um nome para o seu deck.</small>
  </div>
  <button type="submit" class="btn btn-primary">Criar</button>
  <!-- </form> -->
</div>
<?php include('../../inc/footer.php'); ?>