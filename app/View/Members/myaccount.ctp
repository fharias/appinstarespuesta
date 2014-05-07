
<!--container start-->
<div class="container">
    <div class="row">
        <div class="col-lg-7 col-sm-7 address">

            <div class="contact-form">
                    <h3> Ingresa</h3>
                
                <h4>Ingresa tus datos de inicio de sesión</h4>
                <? echo $this->Form->create('Member', array('controller' => 'members', 'action' => 'login')); ?>

                <div class="form-group">
                    <label for="username">Nombre de Usuario (Email) <font color="red"> *</font></label>
                    <?=$this->Form->input('username', array('placeholder'=>'Correo Electronico', 'label'=>false,'type'=>'email','required'=>'required'))?>
                </div>

                <div class="form-group">
                    <label for="names">Contraseña <font color="red"> *</font></label>
                     <?=$this->Form->input('password', array('placeholder'=>'Clave', 'label'=>false, 'type'=>'password','required'=>'required'))?>
                </div>

                
                <button class="btn btn-info" type="submit">Ingresar</button>


            </div>
        </div>
    </div>

</div>
<!--container end-->

