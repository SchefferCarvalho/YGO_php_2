<?php include('../../config.php'); ?>

<?php include('../../inc/header.php'); ?>

<section class="container mt-3">
    <?php 

    $url = $indexAPI . '/tb_carta';
    
    $cartas = GetAPI($url);

    ?>
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