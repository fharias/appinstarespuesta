<?php echo $this->Session->flash(); ?>

<?php echo $this->Form->create('Member', array('class' => 'form-horizontal tasi-form')); ?>
<div class="row">
    <div class="col-lg-12">

        <? // echo $this->Form->input('verificationstatus',array('label'=>false));?>

        <section class="panel">                
            <header class="panel-heading">
                Editar Perfil <span> <?
                    if ($this->Session->read('Auth.User.expert') == '1')
                        echo $this->Html->image("flatlab/verified_" . $this->Session->read('Auth.User.verificationstatus') . ".png", array('width' => '54', 'height' => '52'))
                        ?></span>
            </header>
        </section>
        <section class="panel">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Nombres</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('names', array('label' => false)); ?>
                    </div>
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Apellidos</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('lastnames', array('label' => false)); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Experto Desde</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('expertdate', array('label' => false, 'disabled' => 'disabled')); ?>
                    </div>
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Último Contacto</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('lastdate', array('label' => false, 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Cobro por Hora U$</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('expertrate', array('label' => false)); ?>
                    </div>
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Estatus de Experto</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('expertstatus', array('label' => false)); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Email</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('username', array('label' => false, 'disabled' => 'disabled')); ?>
                    </div>
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Teléfono Móvil</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('mobilephone', array('label' => false)); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Teléfono Oficina</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('officephone', array('label' => false)); ?>
                    </div>
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Teléfono Casa</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('homephone', array('label' => false)); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Biografía</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('bio', array('label' => false, 'type' => 'textarea')); ?>
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Twitter</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('twitterid', array('label' => false, 'disabled' => 'disabled')); ?>
                    </div>
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Facebook</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('facebookid', array('label' => false, 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">LinkedIn</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('linkedinid', array('label' => false, 'disabled' => 'disabled')); ?>
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Cantidad de Votos</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('countvotes', array('label' => false, 'disabled' => 'disabled')); ?>
                    </div>
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Eres Experto?</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('expert', array('label' => false, 'type' => 'checkbox')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">R.U.T</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('dni', array('label' => false)); ?>
                    </div>
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">R.U.T Comercial</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('commercialdni', array('label' => false)); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Compañia</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('company_id', array('label' => false)); ?>
                    </div>
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Título</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('title_id', array('label' => false)); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Términos y Condiciones</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('termsandconditions', array('label' => false, 'type' => 'textarea')); ?>
                    </div>

                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Ciudad</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('city_id', array('label' => false)); ?>
                    </div>
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Rating de Experto</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('expertrating_id', array('label' => false, 'disabled' => 'disabled')); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Idiomas</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('Language', array('label' => false)); ?>
                    </div>
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Aptitudes</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('Skill', array('label' => false)); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Perfil Público?</label>
                    <div class="col-lg-4">
                        <? echo $this->Form->input('public', array('label' => false, 'type' => 'checkbox')); ?>
                    </div>

                </div>

                <div class="btn-group">
                    <button type="submit" class="btn btn-info">Actualizar Perfil</button>
                </div>
            </div>
        </section>
    </div>
    <?php
    echo $this->Form->input('id', array('type' => 'hidden'));


    echo $this->Form->input('password', array('type' => 'hidden'));
    echo $this->Form->input('headline', array('label' => false));
    echo $this->Form->input('image', array('type' => 'hidden'));

    echo $this->Form->input('sumvotes', array('type' => 'hidden'));

    echo $this->Form->input('administrator_id', array('type' => 'hidden'));
    echo $this->Form->input('registerdate', array('type' => 'hidden'));


    echo $this->Form->input('datetermsandconditions', array('label' => false, 'type' => 'hidden'));
    echo $this->Form->input('category_id', array('label' => false, 'type' => 'hidden'));

    echo $this->Form->input('gain', array('label' => false, 'type' => 'hidden'));
    ?>

</div>

