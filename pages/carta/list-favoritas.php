<?php include('../../config.php'); ?>

<?php include('../../inc/header.php'); ?>

<section class="container mt-3">
    <?php

    $url = $indexAPI . '/tb_carta';

    $cartas = GetAPI($url);

    ?>

    <div class="container">
        <div class="form-group row">

            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Categorias</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option value="1">Monster</option>
                        <option value="2">Spell</option>
                        <option value="3">Trap</option>
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
                        <option value="2">Earth</option>
                        <option value="3">Water</option>
                        <option value="4">Fire</option>
                        <option value="5">Wind</option>
                        <option value="6">Light</option>
                        <option value="7">Dark</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Tipo</label>
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
        </div>

        <div class="form-group row">
            <div class="col-sm-9">
                <button type="button" class="btn btn-primary">Buscar</button>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <th>
                <font size="5">
                    Cartas Mais Favoritadas
                </font>
            </th>
            <tr>
                <th scope="col">Colocação</th>
                <th scope="col">Nome da Carta</th>
                <th scope="col">Tipo Carta</th>
                <th scope="col">Level da Carta</th>
                <th scope="col">Ataque</th>
                <th scope="col">Defesa</th>
                <!-- <th scope="col">Quantidade de cartas</th> -->
                <th></th>

            </tr>
        </thead>
        <tbody>
            <?php
            $num = 1;
            if ($cartas != '') :
                foreach ($cartas as $carta) : ?>
                    <tr>
                        <td><?= $num++ ?></td>
                        <td><?= $carta['nme_carta'] ?></td>
                        <td><?= tipoCarta($carta['idt_tipo_carta']) ?></td>
                        <td><?= $carta['level_carta'] ?></td>
                        <td><?= $carta['ataque_carta'] ?></td>
                        <td><?= $carta['defesa_carta'] ?></td>
                        <!-- <td><input style="width:50px;" type="number" min="0" max="3"></td> -->
                    </tr>
                <?php endforeach;
        endif; ?>

        </tbody>
    </table>
</section>
<?php include('../../inc/footer.php'); ?>