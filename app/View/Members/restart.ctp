<?php echo $this->Session->flash(); ?>

<header>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <strong> Cambiar Clave</strong>
                </header>
                <div class="panel-body">

                    <?= $this->Form->create(null, array('controller' => 'members', 'action' => 'restart', 'id' => 'contactform', 'autocomplete' => 'off','class'=>'form-horizontal tasi-form')) ?>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Contraseña actual</label>
                        <div class="col-sm-4">
                            <?= $this->Form->input('lastpassword', array('label' => false, 'type' => 'password', 'maxlength' => '17', 'class' => 'form-control')) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nueva Clave</label>
                        <div class="col-sm-4">
                            <?= $this->Form->input('newpassword', array('label' => false, 'type' => 'password', 'maxlength' => '17','class'=>'form-control')) ?>
                        </div>
                    </div>
                   <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Confirmar Nueva Clave</label>
                        <div class="col-sm-4">
                            <?= $this->Form->input('newpassword_', array('label' => false, 'type' => 'password', 'maxlength' => '17','class'=>'form-control')) ?>
                        </div>
                    </div>
                    <button class="btn btn-info" type="submit">Cambiar Clave</button>
                </div>
            </section>
        </div>
    </div>

</header>
