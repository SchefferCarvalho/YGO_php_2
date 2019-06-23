 <?php include('../../config.php'); ?>
 <?php include('../../inc/header.php'); ?>
 <!-- <link rel='stylesheet' href="/css/bootstrap.min.css">
 <link rel='stylesheet' href="/css/style.css"> -->

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
       background-image: url("https://wallpaperplay.com/walls/full/7/7/e/275483.jpg");
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
         <h1 class="display-3 text-white mb-5"><b>Yu-gi-oh! Cards</b></h1>
         <p class="text-white mb-5"><b>Foi criado com a intenção de auxiliar jogadores e colecionadores de cartas do jogo,
             facilitando a organização em relação as cartas já obtidas e as que faltam. Para mais informações acerca do
             jogo de cartas YGO clicar abaixo.</b></p>
         <p><a class="btn btn-primary btn-lg mb-5" href="https://www.yugioh-card.com/en/" role="button">Saiba mais »</a></p>
       </div>
     </div>
   </div>

   <div class="container">
     <div class="row">
       <!-- <div class="col-md-4">
        <h2>Cartas</h2>
        <p>Possível visualizar as cartas presentes no jogo. </p>
        <p><a class="btn btn-secondary" href="<?= $indexPHP ?>/pages/carta/index.php" role="button">Ver detalhes »</a></p>
      </div> -->

       <div class="col-md-4">
         <h2>Favoritos</h2>
         <p>Veja as cartas mais favoritadas e preferidas para montar os deck mais incríveis. </p>
         <p><a class="btn btn-secondary" href="<?= $indexPHP ?>/pages/carta/list-favoritas.php" role="button">Ver detalhes »</a></p>
       </div>
       <div class="col-md-4">
         <h2>Deck</h2>
         <p>Encontre os decks recomendados para iniciantes e jogares casuais. </p>
         <p><a class="btn btn-secondary" href="<?= $indexPHP ?>/pages/deck/deck-iniciante.php" role="button">Ver detalhes »</a></p>
       </div>

     </div>

     <hr>

   </div> <!-- /container -->

 </main>

 <?php include('../../inc/footer.php'); ?>