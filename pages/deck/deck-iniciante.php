<?php include('../../config.php'); ?>
<?php include('../../inc/header.php'); ?>

<section class="container mt-3">
	<?php 

	$url = $indexAPI . '/tb_deck';
	
	$decks = GetAPI($url);
	?>

	<table class="table">
		<thead>
			<th>
				<font size="5">
					Decks para Iniciantes
				</font>
			</th>
			<tr>
				<th scope="col">Nome do Deck</th>
			</tr>
		</thead>
		<tbody>
			<?php

			if ($decks != '') :
				foreach ($decks as $deck) : ?>
					<tr>
						<td><?= $deck['nme_deck'] ?></td>
					</tr>
				<?php endforeach;
		endif; ?>

		</tbody>
	</table>
</section>
<?php include('../../inc/footer.php'); ?>