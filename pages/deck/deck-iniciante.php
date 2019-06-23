<?php include('../../config.php'); ?>
<?php include('../../inc/header.php'); ?>

<section class="container mt-3">
	<?php

	$url = $indexAPI . '/tb_deck_iniciante';

	$decks = GetAPI($url);
	?>

	<table class="table table-striped table-bordered rounded">
		<h3 class="rounded bg-dark text-white text-center">
			<!-- <font size="5"> -->
			<b>
				Decks para Iniciantes
			</b>
			<!-- </font> -->
		</h3>
		<thead class="thead-dark">
			<tr>
				<th scope="col">Nome do Deck</th>
				<th colspan="2"></th>
			</tr>
		</thead>
		<tbody>
			<?php

			if ($decks != '') :
				foreach ($decks as $deck) : ?>
					<tr>
						<td><?= $deck['nme_deck'] ?></td>
						<td><a href="<?= $indexPHP . '/pages/deck/delete.php?id=' . $deck['idt_deck'] ?>"><button type="button" class="btn btn-warning btn-sm btn-block" style="margin-right: -80px;">Editar</button></a></td>
					</tr>
				<?php endforeach;
		endif; ?>

		</tbody>
	</table>
</section>
<?php include('../../inc/footer.php'); ?>