
<!--container start-->
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-sm-5 address">

        </div>
        <div class="col-lg-7 col-sm-7 address">
            <? echo $this->Form->create('Member'); ?>
            <h4>Selecciona tus áreas de asesoría (Selección múltiple)<font color="red"> *</font> </h4>
            <? echo $this->Form->input('Skill', array('label' => false, 'multiple' => 'checkbox')); ?>
            <div class="contact-form">
                <form role="form">
                    <div class="form-group">
                        <label for="name">Breve descripción de tu experiencia <font color="red"> *</font></label>
                        <? echo $this->Form->input('bio', array('type' => 'textarea', 'label' => false, 'required' => 'required')); ?>
                    </div>
                    <?
                    $options = array(
                        1 => '500 CLP/min',
                        2 => '1.500 CLP/min',
                        3 => '2.000 CLP/min',
                        4 => '2.500 CLP/min',
                        5 => '3.000 CLP/min',
                        6 => '3.500 CLP/min',
                        7 => '4.000 CLP/min',
                        8 => '4.500 CLP/min',
                        9 => '5.000 CLP/min');
                    ?>
                    <div class="form-group">
                        <label for="charge">Honorario estimado por minuto <font color="red"> *</font></label>
                        <? echo $this->Form->input('charge', array('label' => false, 'options' => $options, 'empty' => 'Seleccione', 'required' => 'required')); ?>
                    </div>

                    <div class="form-group">
                        <label for="username">Email <font color="red"> *</font></label>
                        <? echo $this->Form->input('username', array('label' => false, 'placeholder'=>'nombre@domain.cl','type' => 'email', 'required' => 'required')); ?>
                    </div>
                    
                     <div class="form-group">
                        <label for="names">Nombre <font color="red"> *</font></label>
                        <? echo $this->Form->input('names', array('label' => false, 'required' => 'required')); ?>
                    </div>
                    
                    <button class="btn btn-info" type="submit">Postularse</button>
                </form>

            </div>
        </div>
    </div>

</div>
<!--container end-->

