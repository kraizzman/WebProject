<section>
    <?php

    for ($j = 0;$j<3;$j++){
        echo '<div class="col-sm-12 justify-content-between d-flex">';





        for ($i = 0;$i<3;$i++){
            echo '<div class="card col-sm-3 " style="width: 18rem;">';


            $this->Html->image('Julo.jpg', [
                'class' => 'card-img-top',
                'alt' => 'CarteTypefeu'
            ]);

           echo '<div class="card-body">
                <p class="card-text">Typhlosion</p>
                <p class="card-text">Prix : 50 cts</p>
            </div>';


            echo $this->Html->link("Ajouter au panier", [
                'controller' => 'Panier',
                'action' => 'add',


                1],
                ['class' => 'btn btn-danger'


                ]

            );

            echo '</div>';

        }









        echo' </div>';
    }
    ?>

</section>
