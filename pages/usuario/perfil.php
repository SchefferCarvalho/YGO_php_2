<?php include('../../config.php'); ?>
<?php include('../../inc/header.php');
verificarAutenticacao($indexPHP);

?>
<div class="collapse navbar-collapse" id="navbarsExampleDefault">
  <ul class="navbar-nav mr-auto">
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
  </form>
</div>
</nav>

<main role="main">

  <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
  <div class="jumbotron">
    <div class="container">
      <img width="180" height="180" src="https://cdn2.iconfinder.com/data/icons/people-80/96/Picture1-512.png" class="rounded float-left" alt="...">

      <h1 class="display-3">Nome Usuário</h1>
      <h2 class="display-5">Nick Usuário</h2>
      <h3 class="display-9">Email Usuário</h3>
      <p><a class="btn btn-primary btn-lg ml-5" href="<?= $indexPHP ?>/pages/usuario/update.php" role="button">Editar »</a></p>

    </div>
  </div>

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
          <img width="140" height="140" src="https://static.thenounproject.com/png/219525-200.png" class="rounded float-left" alt="...">
        </svg>
        <h2>Deck 1</h2>
        <p><a class="btn btn-secondary" href="<?= $indexPHP ?>/pages/deck/update.php" role="button">Ver detalhes »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
          <img width="140" height="140" src="https://static.thenounproject.com/png/219525-200.png" class="rounded float-left" alt="...">
        </svg>
        <h2>Deck 2</h2>
        <p><a class="btn btn-secondary" href="<?= $indexPHP ?>/pages/deck/update.php" role="button">Ver detalhes »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
          <img width="140" height="140" src="https://static.thenounproject.com/png/219525-200.png" class="rounded float-left" alt="...">
        </svg>
        <h2>Deck 3</h2>
        <p><a class="btn btn-secondary" href="<?= $indexPHP ?>/pages/deck/update.php" role="button">Ver detalhes »</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>

</main>

<?php include('../../inc/footer.php'); ?>