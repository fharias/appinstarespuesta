
<!--container start-->
<div class="container">
    <div class="row">
        <div class="col-lg-7 col-sm-7 address">


            <div class="contact-form">

                <h2> Registrar Miembro</h2>

                <h4>Ingresa los datos para iniciar en Instarespuesta!</h4>
                <? echo $this->Form->create('Member', array('controller' => 'members', 'action' => 'register')); ?>

                <div class="form-group">
                    <label for="username">Email <font color="red"> *</font></label>
                    <?= $this->Form->input('username', array('placeholder' => 'Correo Electronico', 'label' => false, 'type' => 'email', 'required' => 'required')) ?>
                </div>

                <div class="form-group">
                    <label for="names">Nombres <font color="red"> *</font></label>
                    <?= $this->Form->input('names', array('placeholder' => 'Nombres', 'label' => false, 'required' => 'required')) ?>
                </div>

                <div class="form-group">
                    <label for="lastnames">Apellidos <font color="red"> *</font></label>
                    <?= $this->Form->input('lastnames', array('placeholder' => 'Apellidos', 'label' => false, 'required' => 'required')) ?>
                </div>
                <div class="form-group">
                    <label for="lastnames">Contraseña <font color="red"> *</font></label>
                    <?= $this->Form->input('password', array('placeholder' => 'Contraseña', 'label' => false, 'required' => 'required')) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('imadullt', array('type' => 'checkbox', 'label' => 'Soy mayor de 18 años', 'required' => 'required')) ?>
                </div>
                <div class="form-group">
                    Al hacer clic en <strong>“Registrarse”</strong> indica que acepta los <?= $this->Html->link('Términos de servicio', array('controller' => 'members', 'action' => 'termsandconditionsClient'), array('target'=>'_blank','class' => 'linked', 'scape' => false)) ?>
                </div>
                <button class="btn btn-info" type="submit">Registrarse</button>


            </div>
        </div>
    </div>

</div>
<!--container end-->

