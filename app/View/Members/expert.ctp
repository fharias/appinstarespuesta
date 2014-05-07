<?php echo $this->Session->flash(); ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">                
            <header class="panel-heading">
                Buscar Experto
            </header>
        </section>
        <section class="panel">
            <div class="panel-body">
                <form class="form-horizontal tasi-form" method="get">
                    <div class="form-group">
                        <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Cualidad</label>
                        <div class="col-lg-4">

                            <? echo $this->Form->input('skill_id', array('label' => false)); ?>
<!--                            <select class="form-control input-sm m-bot15">
    <option>Option 1</option>
    <option>Option 2</option>
    <option>Option 3</option>
</select>-->
                        </div>
                        <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Lenguaje</label>
                        <div class="col-lg-4">
                            <? echo $this->Form->input('language_id', array('label' => false)); ?>
<!--                            <select class="form-control input-sm m-bot15">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Título</label>
                        <div class="col-lg-4">
                            <? echo $this->Form->input('title_id', array('label' => false)); ?>
<!--                            <select class="form-control input-sm m-bot15">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>-->
                        </div>
                        <!--<label class="col-sm-2 control-label col-lg-1" for="inputSuccess">País</label>-->
                        <!--                        <div class="col-lg-4">
                        <? // echo $this->Form->input('country_id',array('label'=>false));?>
                                                    <select class="form-control input-sm m-bot15">
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>-->
                        <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Ciudad</label>
                        <div class="col-lg-4">
                            <? echo $this->Form->input('city_id', array('label' => false)); ?>
<!--                            <select class="form-control input-sm m-bot15">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label col-lg-1" for="inputSuccess">Compañia</label>
                        <div class="col-lg-4">
                            <? echo $this->Form->input('company_id', array('label' => false)); ?>
<!--                            <select class="form-control input-sm m-bot15">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>-->
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="btn-group">
                            <button type="submit" class="btn btn-info">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>


