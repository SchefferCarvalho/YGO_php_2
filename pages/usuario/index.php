<?php include('../../config.php'); ?>
<?php include('../../inc/header.php');
verificarAutenticacao($indexPHP);
verificarAdmin($indexPHP);

?>

<section class="container mt-3">

	<?php

	$url = $indexAPI . '/tb_usuario';
	$usuarios = GetAPI($url);
	?>
	<table class="table table-striped table-bordered rounded">
		<h3 class="rounded bg-dark text-white text-center">
			<!-- <font size="5"> -->
			<b>
				Usuários
			</b>
			<!-- </font> -->
		</h3>
		<thead class="thead-dark">
			<tr>
				<th scope="col">Email</th>
				<th scope="col">Nome da Usuário</th>
				<th scope="col">Nick da Usuário</th>
				<th></th>
				<th></th>
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
						<td class="p-2"><a href="<?= $indexPHP ?>/pages/usuario/update.php"><button type="button" class="btn btn-warning btn-sm btn-block" style="margin-right: 0px;">Editar</button></a></td>
						<td class="p-2"><a href="<?= $indexPHP.'/pages/usuario/delete.php?id='.$usuario['idt_usuario'] ?>"><button type="button" class="btn btn-danger btn-sm btn-block" style="margin-right: 0px;">Deletar</button></a></td>
					</tr>
				<?php endforeach;
		endif; ?>

		</tbody>
	</table>
</section>
<?php include('../../inc/footer.php'); ?>