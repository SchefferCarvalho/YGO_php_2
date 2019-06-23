<!DOCTYPE html>
<?php include('../../inc/funcoesGerais.php') ?>
<html>
<header>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</header>

<body>

	<nav class="navbar navbar-expand-lg bg-dark">
		<a class="navbar-brand text-white" href="<?= $indexPHP ?>/pages/painel/index.php"><b>
				<img class="mr-2" src="https://apprecs.org/gp/images/app-icons/300/1f/com.logickllc.yugipedia.android.jpg" alt="" width="37" height="37">
				YugiohHub</b></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Cartas
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<?php if (estaLogado()) { ?>
							<a class="dropdown-item" href="<?= $indexPHP ?>/pages/carta/index.php">Listar Cartas</a>
						<?php } ?>
						<a class="dropdown-item" href="<?= $indexPHP ?>/pages/carta/list-favoritas.php">Cartas Mais Favoritadas</a>
						<?php if (estaLogado()) { ?>
							<a class="dropdown-item" href="<?= $indexPHP ?>/pages/carta/favoritas.php">Favoritas</a>
						<?php } ?>
					</div>

				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Deck
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= $indexPHP ?>/pages/deck/deck-iniciante.php">Decks Iniciante</a>
							<?php if (estaLogado()) { ?>
							<a class="dropdown-item" href="<?= $indexPHP ?>/pages/deck/index.php">Listar Deck</a>
							<a class="dropdown-item" href="<?= $indexPHP ?>/pages/deck/create.php">Criar Deck</a>
							<a class="dropdown-item" href="<?= $indexPHP ?>/pages/deck/update.php">Editar Deck</a>
							<?php } ?>
					</div>
					<div class="">

				</li>
				<?php if (estaLogado()) { ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Usuário
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php if(ehAdmin()){ ?>
							<a class="dropdown-item" href="<?= $indexPHP ?>/pages/usuario/index.php">Listar Usuários</a>
							<a class="dropdown-item" href="<?= $indexPHP ?>/pages/usuario/create.php">Cadastrar usuário</a>
							<?php } ?>
							<a class="dropdown-item" href="<?= $indexPHP ?>/pages/usuario/perfil.php">Perfil do Usuário</a>
						</div>
					</li>					
				<?php } ?>
			</ul>

			<?php if (estaLogado()) { ?>
				<a href="<?= $indexPHP ?>/logout.php">
					<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
				</a>
			<?php } else { ?>
				<a href="<?= $indexPHP ?>/login-page.php">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
				</a>
			<?php } ?>
		</div>

		<!-- 	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form> -->
		</div>
	</nav>