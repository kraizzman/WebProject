<section class="container">




    <div class="col m12">
        <?php echo $this->Form->create(null, ['type' => 'post', 'class' => "form-horizontal style-form"]); ?>
        <div class="col m8">
            <label class="col-sm-2 col-sm-2 control-label">Username</label>
            <div>
                <?php echo $this->Form->control('username', ['class' => 'form-control', 'label' => false]); ?>
            </div>

        </div>
        <div class="col m8">
            <label class="col-sm-2 col-sm-2 control-label">Password</label>
            <div>
                <?php echo $this->Form->control('password', ['class' => 'form-control', 'label' => false]); ?>
            </div>
        </div>
            <div class="center mb-2x">
                <?php echo $this->Form->button('Submit', ['type' => 'submit', 'class' => 'btn btn-primary']); ?>

            </div>

        <?php echo $this->Form->end(); ?>
    </div>

</section>
