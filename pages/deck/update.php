<?php include('../../config.php'); ?>
<?php include('../../inc/header.php'); ?>

<?php $curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $indexAPI . '/tb_carta',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    ),
));

$cartas = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

$cartas = json_decode($cartas, true)
?>

<section class="mt-3 w-100 p-3">
    <!-- <form class="card text-left"> -->
    <div class="form-row">
        <div class="form-group col-md-3">
            <form class="card text-center">
                <label for="inputCity"><b>Carta</b></label>
            </form>
            <!-- <input type="text" class="form-control" id="inputCity"> -->
            <form class="card text-left">
                <div class="card">
                    <img src="https://storage.googleapis.com/ygoprodeck.com/pics/89631139.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nome da Carta</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Categoria - (Mosntro/Magina/Armadilha)</li>
                            <li class="list-group-item">Tipo - (Zumbi/Continua)</li>
                            <li class="list-group-item">Atributo - (terra)</li>
                            <li class="list-group-item">Level - </li>
                            <li class="list-group-item">Ataque - </li>
                            <li class="list-group-item">Defesa - </li>
                        </ul>
                        <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </form>
        </div>
        <div class="form-group col-md-5">
            <form class="card text-center">
                <label for="inputState"><b>Deck</b></label>
            </form>
            <form class="card text-left">
                <table class="table">
                    <tbody>
                        <?php
                        $num = 1;
                        if ($cartas != '') :
                            foreach ($cartas as $carta) : ?>
                                <tr>
                                    <td><?= $num++ ?></td>
                                    <td><?= $carta['nme_carta'] ?></td>
                                    <td><?= tipoCarta($carta['idt_tipo_carta']) ?></td>
                                    <!-- <td><input style="width:50px;" type="number" min="0" max="3"></td> -->
                                </tr>
                            <?php endforeach;
                    endif; ?>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="form-group col-md-4">
            <form class="card text-center"><label for="inputZip"><b>Lista de Cartas</b></label></form>
            <form class="card text-left">
                <table class="table">
                    <tbody>
                        <?php

                        if ($cartas != '') :
                            foreach ($cartas as $carta) : ?>
                                <tr>
                                    <td><?= $carta['nme_carta'] ?></td>
                                    <!-- <td><input style="width:50px;" type="number" min="0" max="3"></td> -->
                                </tr>
                            <?php endforeach;
                    endif; ?>
                    </tbody>
                </table>
            </form>
            <!-- <input type="text" class="form-control" id="inputZip"> -->
        </div>
        <!-- <div class="">
            <button type="submit" class="btn btn-primary">Aplicar</button>
            <button type="button" class="btn btn-danger">Cancelar</button>
        </div> -->
    </div>
    <!-- </form> -->
</section>

<!-- </form> -->
<!-- </section> -->

<?php include('../../inc/footer.php'); ?>