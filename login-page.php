<?php include('./config.php') ?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login Yugioh</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?=$indexPHP?>/biblioteca/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$indexPHP?>/css/style.css">

    <!-- Custom styles for this template -->
    <link href="<?=$indexPHP?>/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <form class="form-signin" method="POST" action="<?=$indexPHP?>/login.php">
  <img class="mb-4" src="" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">

  <label for="inputPassword" class="sr-only">Password</label>
  <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
  <div class="checkbox mb-3">

  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">© 2017-2019</p>
</form>


</body></html>