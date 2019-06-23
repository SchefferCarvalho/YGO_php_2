<?php
include('../../config.php');
include('../../inc/funcoesGerais.php');

$id = $_POST['id'];

$urlCarta = $indexAPI . '/tb_carta/'.$id;
$carta = GetAPI($urlCarta);
$carta = $carta[0];
?>
<img src="<?=$carta['imagem_carta'] ?>" class="card-img-top" alt="...">
<div class="card-body">
    <h5 class="card-title"><?=$carta['nme_carta'] ?></h5>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Tipo - <?=$carta['tipo_carta'] ?></li>
        <li class="list-group-item">Raça - <?=$carta['raca_carta'] ?></li>
        <li class="list-group-item">Atributo - <?=$carta['atributo_carta'] ?></li>
        <li class="list-group-item">Level - <?=$carta['level_carta'] ?></li>
        <li class="list-group-item">Ataque - <?=$carta['ataque_carta'] ?></li>
        <li class="list-group-item">Defesa - <?=$carta['defesa_carta'] ?></li>
    </ul>
    <p class="card-text mt-3"><?=$carta['desc_carta'] ?></p>
</div>
?>