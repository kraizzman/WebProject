<section class="yellow">


    <div class="col s12">
        <?php echo $this->Form->create(null, ['type' => 'post', 'class' => "form-horizontal style-form"]); ?>
        <div class="input-field col s10">
            <label class="col-sm-2 col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
                <?php echo $this->Form->control('username', ['class' => 'form-control', 'label' => false]); ?>
            </div>

        </div>
        <div class="input-field col s1">
            <label class="col-sm-2 col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <?php echo $this->Form->control('password', ['class' => 'form-control', 'label' => false]); ?>
            </div>
            <div class="pull-l3">
                <?php echo $this->Form->button('Enregistrer', ['type' => 'submit', 'class' => 'btn btn-primary']); ?>

            </div>

</section>
