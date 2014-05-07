
<!--container start-->
<div class="container">
    <div class="row">
        <div class="col-lg-5 col-sm-5 address">

        </div>
        <div class="col-lg-7 col-sm-7 address">
            <? echo $this->Form->create('Member'); ?>
            <h4>Para conectarse al especialista adecuado, selecciona tus áreas de asesoría (Selección múltiple)<font color="red"> *</font> </h4>
            <? echo $this->Form->input('Skill', array('label' => false, 'multiple' => 'checkbox')); ?>
            <div class="contact-form">
                <form role="form">
                    <div class="form-group">
                        <label for="query">Descripción breve de la consulta <font color="red"> *</font></label>
                        <? echo $this->Form->input('query', array('type' => 'textarea', 'label' => false, 'required' => 'required')); ?>
                    </div>
                    <?
                    $options = array(
                        1 => '~15 min',
                        2 => '~30 min',
                        3 => '~45 min',
                        4 => '~60 min'
                      );
                    
                    ?>
                    <div class="form-group">
                        <label for="charge">Tiempo estimado de la consulta<font color="red"> *</font></label>
                        <? echo $this->Form->input('time_query', array('label' => false, 'options' => $options, 'empty' => 'Seleccione', 'required' => 'required')); ?>
                    </div>

                    <div class="form-group">
                        <label for="username">Email <font color="red"> *</font></label>
                        <? echo $this->Form->input('username', array('label' => false, 'placeholder'=>'nombre@dominio.cl','type' => 'email', 'required' => 'required')); ?>
                    </div>
                     
                    <button class="btn btn-info" type="submit">Entregar</button>
                </form>

            </div>
        </div>
    </div>

</div>
<!--container end-->

