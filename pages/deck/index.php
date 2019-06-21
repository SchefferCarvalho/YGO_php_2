<?php include('../../config.php'); ?>
<?php include('../../inc/header.php');
verificarAutenticacao($indexPHP);

?>

<section class="container mt-3">
	<?php

	$url = $indexAPI . '/tb_deck';

	$decks = GetAPI($url);

	?>

	<table class="table table-striped table-bordered rounded">
		<h3 class="rounded bg-dark text-white text-center">
			<!-- <font size="5"> -->
			<b>
				Decks
			</b>
			<!-- </font> -->
		</h3>
		<thead class="thead-dark">
			<tr>
				<th scope="col">Nome do Deck</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php

			if ($decks != '') :
				foreach ($decks as $deck) : ?>
					<tr>
						<td><?= $deck['nme_deck'] ?></td>
						<td class="p-2"><a href="<?= $indexPHP . '/pages/deck/delete.php?id=' . $deck['idt_deck'] ?>"><button type="button" class="btn btn-danger btn-sm btn-block" style="margin-right: -80px;">Deletar</button></a></td>
					</tr>
				<?php endforeach;
		endif; ?>

		</tbody>
	</table>
</section>
<?php include('../../inc/footer.php'); ?>