<header class="header black-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo">
                    <a href="<?= $this->Url->build(['controller' => 'Front', 'action' => 'index']) ?>">
                        <img src="<?= $this->Url->build('/img/logo.png') ?>" alt="logo">
                    </a>
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']) ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
</header>
