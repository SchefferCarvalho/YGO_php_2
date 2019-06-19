<?php 
include_once('../../config.php');
include('../../inc/header.php');

verificarAutenticacao($indexPHP);
?>

<section class="container mt-3">
	
	<?php
	$url = $indexAPI . '/tb_carta';
	$cartas = GetAPI($url);
	
	?>

	<table class="table">
		<thead>
			<!-- <th> Lista de Cartas</th> -->
			<th>
				<font size="5">
					Cartas
				</font>
			</th>
			<tr>
				<th scope="col">Nome da Carta</th>
				<th scope="col">Tipo Carta</th>
				<th scope="col">Level da Carta</th>
				<th scope="col">Ataque</th>
				<th scope="col">Defesa</th>
				<th scope="col">Quantidade de cartas</th>
				<th></th>

			</tr>
		</thead>
		<tbody>
			<?php

			if ($cartas != '') :
				foreach ($cartas as $carta) : ?>
					<tr>
						<td><?= $carta['nme_carta'] ?></td>
						<td><?= tipoCarta($carta['idt_tipo_carta']) ?></td>
						<td><?= $carta['level_carta'] ?></td>
						<td><?= $carta['ataque_carta'] ?></td>
						<td><?= $carta['defesa_carta'] ?></td>
						<td><input style="width:50px;" type="number" min="0" max="3"></td>
					</tr>
				<?php endforeach;
		endif; ?>

		</tbody>
	</table>
</section>
<?php include('../../inc/footer.php'); ?>