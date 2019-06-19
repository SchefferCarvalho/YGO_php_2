<?php include('../../config.php'); ?>
<?php include('../../inc/header.php'); 
verificarAutenticacao($indexPHP);

?>

<section class="container mt-3">

	<?php 

	$url = $indexAPI . '/tb_usuario';
	$usuarios = GetAPI($url);
	?>
	<th>
		<b>
			<font size="5">
				Usuários
			</font>
		</b>
	</th>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Email</th>
				<th scope="col">Nome da Usuário</th>
				<th scope="col">Nick da Usuário</th>
			</tr>
		</thead>
		<tbody>
			<?php

			if ($usuarios != '') :
				foreach ($usuarios as $usuario) : ?>
					<tr>
						<td><?= $usuario['email_usua'] ?></td>
						<td><?= $usuario['nme_usua'] ?></td>
						<td><?= $usuario['nicknme_usua'] ?></td>
						<td><a href=""><button type="button" class="btn btn-danger my-0 my-sm-0 btn-sm" style="margin-right: -60px;">Deletar</button></a><td>

					</tr>
				<?php endforeach;
		endif; ?>

		</tbody>
	</table>
</section>
<?php include('../../inc/footer.php'); ?>