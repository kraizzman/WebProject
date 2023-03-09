<header class="header">
    <div class="d-flex bg-primary justify-content-between">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/2560px-International_Pok%C3%A9mon_logo.svg.png" class="col-sm-2" height="20%">
        <div class="d-flex justify-content-end col-sm-10">
            <?php
            echo $this->Html->image("logintest.png", [
                "alt" => "Brownies",
                'url' => ['controller' => 'Users', 'action' => 'Login', 6],
                'class' => 'col-sm-1'
            ]);
            echo $this->Html->image("shopping-cart-logo.svg", [
                "alt" => "Brownies",
                'url' => ['controller' => 'Users', 'action' => 'Panier', 6],
                'class' => 'col-sm-1'
            ]);
            echo $this->Html->image("Plusicone.png", [
                "alt" => "Brownies",
                'url' => ['controller' => 'Carts', 'action' => 'add', 6],
                'class' => 'col-sm-1'
            ]);
            ?>
        </div>
    </div>
</header>
