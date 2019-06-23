<?php include('../../config.php'); ?>
<?php include('../../inc/header.php');
// verificarAutenticacao($indexPHP);

if (isset($_POST['email']) && isset($_POST['senha']) ) {

  $dados['email'] = $_POST['email'];
  $dados['senha'] = $_POST['senha'];
  $dados['nome'] = $_POST['nome'];
  $dados['nick'] = $_POST['nick'];
  $dados['admin'] = (isset($_POST['admin'])?1:0);
  
  $url = $indexAPI . '/tb_usuario';
  PostAPI($url, $dados);
}

?>
<form method="post">
  <div class="mx-auto mt-5 mb-5" style="width: 500px;">
    <h4 class="rounded bg-dark text-white text-center">
      <b>
        Cadastrar Usuário
      </b>
    </h4>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" required>
      </div>
      <div class="form-group col-md-6">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" name="senha" placeholder="Senha" required>
      </div>
    </div>
    <div class="form-group">
      <label for="nome">Nome do Usuário:</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome Usuário" required>
    </div>
    <div class="form-group">
      <label for="nick">Nick do Usuário:</label>
      <input type="text" class="form-control" name="nick" placeholder="Nick Usuário" required>
    </div>
    <?php if(ehAdmin()): ?>   
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="admin" name="admin">
      <label class="form-check-label" for="admin">Conta de Administrador</label>
    </div>
    <?php endif; ?>
    <button type="submit" class="btn btn-primary">Criar</button>
  </div>
</form>

<?php include('../../inc/footer.php'); ?>