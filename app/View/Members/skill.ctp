<?php echo $this->Session->flash(); ?> 
<div class="row">
    <div class="col-lg-12">
        <section class="panel">                
            <header class="panel-heading">
                Editar Aptitudes
            </header>
        </section>
        <section class="panel">
            <div class="panel-body">
                <?php
                echo $this->Form->create('Member', array('class' => 'form-horizontal tasi-form'));
                echo $this->Form->input('id', array('type' => 'hidden', 'value' => $this->Session->read('Auth.User.id')));
                ?>
                <div class="form-group">
                    <div class="col-lg-4">
                        <? echo $this->Form->input('Skill', array('multiple' => 'checkbox', 'label' => false)); ?>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="submit" class="btn btn-info">Actualizar Aptitudes</button>
                </div>
            </div>
        </section>
    </div>
</div>