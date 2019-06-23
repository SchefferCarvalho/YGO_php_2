<?php 
include('../../config.php');
include('../../inc/header.php');

if(isset($_GET['id'])){
    $idDeck = $_GET['id'];
}

?>

<div class="container">
    <div class="form-group row mt-2">

        <div class="col-sm-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option value="1">...</option>
                    <option value="2">Normal Monster</option>
                    <option value="3">Effect Monster</option>
                    <option value="4">Ritual Monster</option>
                    <option value="5">Spell Card</option>
                    <option value="6">Trap Card</option>
                    <option value="7">Fusion Monster</option>
                    <option value="8">Ritual Effect Monster</option>
                    <option value="9">Union Effect Monster</option>
                    <option value="10"> Flip Effect Monster</option>
                </select>
            </div>
        </div>

        <label for="inputAtaque" class="col-sm-1 col-form-label">Ataque</label>
        <div class="col-sm-2">
            <input class="form-control" id="ataque" placeholder="">
        </div>
        <label for="inputDefesa" class="col-sm-1 col-form-label">Defesa</label>
        <div class="col-sm-2">
            <input class="form-control" id="defesa" placeholder="">
        </div>
    </div>
    <div class="form-group row">

        <div class="col-sm-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Atributo</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option value="1">...</option>
                    <option value="2">EARTH</option>
                    <option value="3">WATER</option>
                    <option value="4">FIRE</option>
                    <option value="5">WIND</option>
                    <option value="6">LIGHT</option>
                    <option value="7">DARK</option>
                    <option value="8">DIVINE</option>
                </select>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Raça</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option value="1">...</option>
                    <option value="2">Warrior</option>
                    <option value="3">Spellcaster</option>
                    <option value="5">Fairy</option>
                    <option value="6">Fiend</option>
                    <option value="7">Zombie</option>
                    <option value="8">Machine</option>
                    <option value="9">Aqua</option>
                    <option value="10">Pyro</option>
                    <option value="11">Rock</option>
                    <option value="12">Winged Beast</option>
                    <option value="13">Plat</option>
                    <option value="14">Insect</option>
                    <option value="15">Thunder</option>
                    <option value="16">Dragon</option>
                    <option value="17">Beast</option>
                    <option value="18">Beast-Warrior</option>
                    <option value="19">Dinosaur</option>
                    <option value="20">Fish</option>
                    <option value="21">Sea Serpent</option>
                    <option value="22">Reptile</option>
                    <option value="23">Psychic</option>
                    <option value="24">Divine-Beast</option>
                </select>
            </div>
        </div>

        <label for="inputLevel" class="col-sm-1 col-form-label">Level</label>
        <div class="col-sm-1">
            <input class="form-control" id="level" placeholder="">
        </div>
        <label for="inputNome" class="col-sm-1 col-form-label">Nome</label>
        <div class="col-sm-3">
            <input class="form-control" id="nome" placeholder="">
        </div>
        <div class="col-sm-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkFavorito">
                <label class="form-check-label" for="checkFavorito">
                    Favoritas
                </label>
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-9">
            <button type="button" class="btn btn-primary">Buscar</button>
        </div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-success">Adicionar</button>
        </div>
        <div class="col-sm-0">
            <button type="button" class="btn btn-danger">Remover</button>
        </div>

    </div>
</div>

<section class="mt-0 w-100 p-3">
    <!-- <form class="card text-left"> -->
    <div class="form-row">
        <div class="form-group col-md-3">
            <form class="card text-center bg-dark text-white">
                <label for="inputCity"><b>Carta</b></label>
            </form>
            <?php
                $urlCarta = $indexAPI . '/tb_carta/'.rand(1, 87);
                $carta = GetAPI($urlCarta);
                $carta = $carta[0];
            ?>
            <!-- <input type="text" class="form-control" id="inputCity"> -->
            <form class="card text-left">
                <div class="card" id="conteudo">
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
                </div>
            </form>
        </div>
        <div class="form-group col-md-5">
            <?php
            $url = $indexAPI . '/tb_deck_lista/'.$idDeck;
            $cartas = GetAPI($url);
            ?>
            <form class="card text-center bg-dark text-white">
                <label for="inputState"><b>Deck</b></label>
            </form>
            <form class="card text-left">
                <table class="table table-striped rounded">
                    <tbody>
                        <?php
                        $num = 1;
                        if ($cartas != '') :
                            foreach ($cartas as $carta) : ?>
                                <tr>
                                    <td class="text-center"><?= $num++ ?></td>
                                    <td class="lista-carta" id="<?= $carta['idt_carta']?>"><?= $carta['nme_carta'] ?></td>
                                    <td class="text-center"><?= Carta($carta['tipo_carta']) ?></td>
                                    <!-- <td><input style="width:50px;" type="number" min="0" max="3"></td> -->
                                </tr>
                            <?php endforeach;
                    endif; ?>
                    </tbody>
                </table>
            </form>
        </div>

        <?php
            $url = $indexAPI . '/tb_carta';
            $cartas = GetAPI($url);
        ?>
        <div class="form-group col-md-4">
            <form class="card text-center bg-dark text-white"><label for="inputZip"><b>Lista de Cartas</b></label></form>
            <form class="card text-left">
                <table class="table table-striped rounded">
                    <tbody>
                        <?php

                        if ($cartas != '') :
                            foreach ($cartas as $carta) : ?>
                                <tr>
                                    <a href="#"><td class="lista-carta" id="<?= $carta['idt_carta'] ?>"><?= $carta['nme_carta'] ?></td></a>
                                    <!-- <td><input style="width:50px;" type="number" min="0" max="3"></td> -->
                                </tr>
                            <?php endforeach;
                    endif; ?>
                    </tbody>
                </table>
            </form>
            <!-- <input type="text" class="form-control" id="inputZip"> -->
        </div>
    </div>

</section>

<!-- </form> -->
<!-- </section> -->
<script src="<?=$indexPHP?>/biblioteca/jquery.min.js"></script>

<script type="text/javascript">

$('.lista-carta').click(function(){
    id = this.id;
    $.ajax({
      url: 'busca-carta.php',
      type: 'POST', // Send post data
      data: 'id='+id,
      success: function(result){
        $('#conteudo').html(result);
      }
    });
})
</script>

<?php include('../../inc/footer.php'); ?>