<?php include('../../config.php'); ?>
<?php include('../../inc/header.php'); 
verificarAutenticacao($indexPHP);

?>

<section class="container mt-3">
	<?php 

	$url = $indexAPI . '/tb_deck';
	
	$decks = GetAPI($url);

	?>

	<table class="table">
		<thead>
			<th>
				<font size="5">
					Decks
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
						<td><a href="<?= $indexPHP.'/pages/deck/delete.php?id='.$deck['idt_deck']?>"><button type="button" class="btn btn-danger my-0 my-sm-0 btn-sm" style="margin-right: -60px;">Deletar</button></a><td>
					</tr>
				<?php endforeach;
		endif; ?>

		</tbody>
	</table>
</section>
<?php include('../../inc/footer.php'); ?>