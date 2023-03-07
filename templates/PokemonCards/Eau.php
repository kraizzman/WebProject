<section >
    <div class="col-sm-12 d-flex justify-content-between">

        <div class="card col-sm-3" style="width: 18rem;">
            <img src="https://assets.pokemon.com/assets/cms2-fr-fr/img/cards/web/BWP/BWP_FR_BW03.png" class="card-img-top" alt="CarteTypefeu">
            <div class="card-body">
                <p class="card-text">Moustillon</p>
                <p class="card-text">Prix : 15 cts</p>
            </div>

            <?php
            echo $this->Html->link("Ajouter au panier", [
                'controller' => 'Panier',
                'action' => 'add',


                1],
                ['class' => 'btn btn-danger'


                ]

            );
            ?>
        </div>


        <div class="card col-sm-1" style="width: 18rem;">
            <img src="https://www.pokepedia.fr/images/3/33/Carte_HS_Kit_du_Dresseur_L%C3%A9viator_2.png?20140105193555" class="card-img-top" alt="CarteTypefeu">
            <div class="card-body">
                <p class="card-text">Type Eau</p>
            </div>

            <?php
            echo $this->Html->link("Voir les cartes de ce type", [
                'controller' => 'Carts',
                'action' => 'add',


                1],
                ['class' => 'btn btn-primary'


                ]

            );
            ?>

        </div>

        <div class="card col-sm-1" style="width: 18rem;">
            <img src="https://www.pokepedia.fr/images/thumb/1/1f/Carte_XY_%C3%89nergie_Plante.png/270px-Carte_XY_%C3%89nergie_Plante.png" class="card-img-top" alt="CarteTypefeu">
            <div class="card-body">
                <p class="card-text">Type Plante</p>
            </div>

            <?php
            echo $this->Html->link("Voir les cartes de ce type", [
                'controller' => 'Carts',
                'action' => 'add',


                1],
                ['class' => 'btn btn-success'


                ]

            );
            ?>

        </div>




    </div>
</section>
