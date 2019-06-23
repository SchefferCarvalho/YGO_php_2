<?php include('../../config.php'); ?>
<?php include('../../inc/header.php');
verificarAutenticacao($indexPHP);

if (isset($_POST['nome-deck']) ) {
 $dados['nome'] = $_POST['nome-deck'];
 $dados['usuario'] = $_SESSION['usuario']['idt_usuario'];
 
 $url = $indexAPI . '/tb_deck';

  PostAPI($url, $dados);
}

?>

<div class="mx-auto mt-5 mb-5" style="width: 500px;">
  <form action="<?=$indexPHP?>/pages/deck/create.php" method="post">
  <h4 class="rounded bg-dark text-white text-center">
    <!-- <font size="5"> -->
    <b>
      Criar Deck
    </b>
    <!-- </font> -->
  </h4>
  <div class="form-group row">
    <label for="nome-deck">Nome do deck: </label>
    <input type="text" class="form-control" name="nome-deck" placeholder="Entre com o nome do Deck" required>
    <small class="form-text text-muted">Escolha um nome para o seu deck.</small>
  </div>
  <button type="submit" class="btn btn-primary">Criar</button>
  </form>
</div>
<?php include('../../inc/footer.php'); ?>