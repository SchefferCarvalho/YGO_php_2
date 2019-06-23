<?php include('./config.php') ?>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Login Yugioh</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?= $indexPHP ?>/biblioteca/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $indexPHP ?>/css/style.css">

  <!-- Custom styles for this template -->
  <!-- <link href="<?= $indexPHP ?>/css/signin.css" rel="stylesheet"> -->
</head>

<style type="text/css">
  .jumbotron-with-background {
    background-image: url("https://i.pinimg.com/originals/46/2a/f7/462af76ec0cbf0d86b3381265995fc1b.jpg");
    background-position: center;
    /* background-repeat: no-repeat; */
    /* background-size: cover; */
    background-color: rgba(0, 0, 0, 0.7);

  }

  .jumbotron {
    margin-bottom: -1rem;
    height: 100%;
    width: 100%;
  }

  .well {
    background-color: rgba(0, 0, 0, 0.7);

  }

  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }

  .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
  }

  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style>
<body>
  

<!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
<div class="jumbotron jumbotron-fluid jumbotron-with-background">
  <div class="container mw-100 shadow-lg rounded well">
    <div class="container">
      <div class="text-center">
        <form class="form-signin" method="POST" action="<?= $indexPHP ?>/login.php">
          <img class="mb-4" src="https://apprecs.org/gp/images/app-icons/300/1f/com.logickllc.yugipedia.android.jpg" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal text-white">Por favor faça seu login</h1>
          <?php if(isset($_GET['login'])){echo '<div class="alert alert-danger" role="alert">senha ou usuário incorreto!</div>';} ?>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
          <label for="inputPassword" class="sr-only">Password</label>
          <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
          <div class="checkbox mb-3">
          </div>
          
          <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
          <h2 class="h6 mt-2 mb-3 font-weight-normal text-white">Caso não tenha uma conta clique em:
            <a href="<?= $indexPHP ?>/pages/usuario/create.php" class="bbtn btn-link" role="button" aria-pressed="true">Criar Conta</a>
          </h2>
          <p class="mt-5 text-white mt-4">© 2019</p>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
