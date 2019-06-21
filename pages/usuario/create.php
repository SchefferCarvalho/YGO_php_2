<?php include('../../config.php'); ?>
<?php include('../../inc/header.php');
// verificarAutenticacao($indexPHP);

?>

<form>
  <div class="mx-auto mt-5 mb-5" style="width: 500px;">
    <h4 class="rounded bg-dark text-white text-center">
      <b>
        Cadastrar Usuário
      </b>
    </h4>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Senha:</label>
        <input type="password" class="form-control" name="name" placeholder="Senha">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Nome do Usuário:</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome Usuário">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Nick do Usuário:</label>
      <input type="text" class="form-control" name="nick" placeholder="Nick Usuário">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Conta de Administrador</label>
    </div>
    <button type="submit" class="btn btn-primary">Criar</button>
  </div>
</form>

<?php include('../../inc/footer.php'); ?>