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

  <style type="text/css">
    .jumbotron-with-background {
      background-image: url("http://static1.squarespace.com/static/5b90acbae2ccd103c4e1515f/5b90ae0fcd83667e00e3a25c/5b93fcc8562fa717cd99ab05/1536425162624/SAM-027+%286%29.jpg");
      /* background-position: center; */
      background-repeat: no-repeat;
      background-size: cover;
    }

    .well {
      background-color: rgba(0, 0, 0, 0.7);
    }
  </style>

  <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
  <div class="jumbotron jumbotron-fluid jumbotron-with-background">
    <div class="container mw-100 shadow-lg rounded well">
      <div class="container">
        <img width="140" height="150" src="https://www.sprayandwash.co.nz/wp-content/uploads/2018/12/person-icon-white-png-1.png" class="rounded float-left ml-4 mt-4 mr-4" alt="...">

        <h1 class="display-3 text-white mt-5"><b> Nome - <?=$_SESSION['usuario']['nme_usua'] ?></b></h1>
        <h2 class="display-5 text-white"><b>Nick - <?=$_SESSION['usuario']['nicknme_usua'] ?></b></h2>
        <h3 class="display-9 text-white"><b>Email - <?=$_SESSION['usuario']['email_usua'] ?></b></h3>
        <p><a class="btn btn-primary btn-lg ml-5 mb-4 mt-4" href="<?= $indexPHP ?>/pages/usuario/update.php" role="button">Editar »</a></p>
      </div>
    </div>
  </div>

  <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->

    <div class="row">
    <?php 	
    $url = $indexAPI . '/tb_deck/'.$_SESSION['usuario']['idt_usuario'];
    $decks = GetAPI($url);
    if ($decks != '') :
      foreach ($decks as $deck) : ?>
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
          <img width="140" height="140" src="https://static.thenounproject.com/png/219525-200.png" class="rounded float-left" alt="...">
        </svg>
        <h2><?= $deck['nme_deck'] ?></h2>
        <p><a class="btn btn-secondary" href="<?= $indexPHP ?>/pages/deck/update.php?id=' . $deck['idt_deck'] ?>" role="button">Ver detalhes »</a></p>
      </div><!-- /.col-lg-4 -->
      <?php endforeach;
    endif; ?>

    </div><!-- /.row -->
  </div>

</main>

<?php include('../../inc/footer.php'); ?>