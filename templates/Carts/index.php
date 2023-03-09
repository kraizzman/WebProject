<section>

    <div class="col-sm-12 d-flex justify-content-between">

    <div class="card col-sm-3" style="width: 18rem;">
        <img src="https://www.pokepedia.fr/images/thumb/3/3f/Carte_Noir_%26_Blanc_106.png/180px-Carte_Noir_%26_Blanc_106.png" class="card-img-top" alt="CarteTypefeu">
        <div class="card-body">
            <p class="card-text">Type feu</p>
        </div>

        <?php
        echo $this->Html->link("Voir les cartes de ce type", [
                'controller' => 'PokemonCards',
                'action' => 'Feu',


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
            'controller' => 'PokemonCards',
            'action' => 'Eau',


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
                'controller' => 'PokemonCards',
                'action' => 'Plante',


                1],
                ['class' => 'btn btn-success'


                ]

            );
            ?>

        </div>




    </div>
    <div class="col-sm-12 d-flex justify-content-between">

        <div class="card col-sm-3" style="width: 18rem;">
            <img src="https://www.pokepedia.fr/images/thumb/1/14/Carte_XY_%C3%89nergie_%C3%89lectrique.png/270px-Carte_XY_%C3%89nergie_%C3%89lectrique.png" class="card-img-top" alt="CarteTypefeu">
            <div class="card-body">
                <p class="card-text">Type Electrique</p>
            </div>

            <?php
            echo $this->Html->link("Voir les cartes de ce type", [
                'controller' => 'PokemonCards',
                'action' => 'Electrique',


                1],
                ['class' => 'btn btn-warning'


                ]

            );
            ?>
        </div>


        <div class="card col-sm-1" style="width: 18rem;">
            <img src="https://www.pokepedia.fr/images/thumb/0/01/Carte_XY_%C3%89nergie_Psy.png/270px-Carte_XY_%C3%89nergie_Psy.png" class="card-img-top" alt="CarteTypefeu">
            <div class="card-body">
                <p class="card-text">Type Psy</p>
            </div>

            <?php
            echo $this->Html->link("Voir les cartes de ce type", [
                'controller' => 'PokemonCards',
                'action' => 'Psy', 1],
                ['class' => 'btn btn-secondary']
            );
            ?>

        </div>

        <div class="card col-sm-1" style="width: 18rem;">
            <img src="https://www.pokepedia.fr/images/thumb/e/e7/Carte_XY_%C3%89nergie_Combat.png/270px-Carte_XY_%C3%89nergie_Combat.png" class="card-img-top" alt="CarteTypefeu">
            <div class="card-body">
                <p class="card-text">Type Combat</p>
            </div>

            <?php
            echo $this->Html->link("Voir les cartes de ce type", [
                'controller' => 'PokemonCards',
                'action' => 'Combat',


                1],
                ['class' => 'btn btn-dark'


                ]

            );
            ?>

        </div>
    </div>
    <div class="col-sm-12 d-flex justify-content-between">

        <div class="card col-sm-3" style="width: 18rem;">
            <img src="https://www.pokepedia.fr/images/thumb/9/91/Carte_XY_%C3%89nergie_Obscurit%C3%A9.png/270px-Carte_XY_%C3%89nergie_Obscurit%C3%A9.png" class="card-img-top" alt="CarteTypefeu">
            <div class="card-body">
                <p class="card-text">Type Acier</p>
            </div>

            <?php
            echo $this->Html->link("Voir les cartes de ce type", [
                'controller' => 'PokemonCards',
                'action' => 'Acier', 1],
                ['class' => 'btn btn-dark']
            );
            ?>
        </div>


        <div class="card col-sm-1" style="width: 18rem;">
            <img src="https://www.pokepedia.fr/images/thumb/9/91/Carte_XY_%C3%89nergie_Obscurit%C3%A9.png/270px-Carte_XY_%C3%89nergie_Obscurit%C3%A9.png" class="card-img-top" alt="CarteTypefeu">
            <div class="card-body">
                <p class="card-text">Type Tenebres</p>
            </div>

            <?php
            echo $this->Html->link("Voir les cartes de ce type", [
                'controller' => 'Carts',
                'action' => 'add', 1],
                ['class' => 'btn btn-dark']
            );
            ?>

        </div>

        <div class="card col-sm-1" style="width: 18rem;">
            <img src="https://www.pokepedia.fr/images/1/11/Carte_XY_%C3%89nergie_F%C3%A9e.png" class="card-img-top" alt="CarteTypefeu">
            <div class="card-body">
                <p class="card-text">Type Fée</p>
            </div>

            <?php
            echo $this->Html->link("Voir les cartes de ce type", [
                'controller' => 'Carts',
                'action' => 'add', 1],
                ['class' => 'btn btn-danger']
            );
            ?>

        </div>


</section>
