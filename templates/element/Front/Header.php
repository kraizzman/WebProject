
<header class="header black-bg">

   <div class="nav pull-right top-menu">

    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/2560px-International_Pok%C3%A9mon_logo.svg.png" alt="logo" width="20%">

       <?php
       echo $this->Html->image("shopping-cart-logo.svg", [
           "alt" => "Brownies",
           'url' => ['controller' => 'Users', 'action' => 'Panier', 6]
       ]
       );
       ?>

   </div>

</header>
