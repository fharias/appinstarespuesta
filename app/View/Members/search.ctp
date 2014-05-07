<?php echo $this->Session->flash(); ?>

<header>
    <h1>Resultados</h1>
</header>
<?
if (isset($results)) {

    echo $this->Form->create('Member');
    foreach ($results as $result) {
        ?>

        <div class="row">
            <div class="col-lg-4">
                <!--user info table start-->
                <section class="panel">
                    <div class="panel-body">
                        <?
                        $id = $result['Member']['id'];
                        $imagen = $result['Member']['image'];


                        $url = "avatars/" . $id . "/" . $imagen;

                        if ($result['Member']['image'] != null) {

                            echo $this->Html->image($url, array('width' => '200px'));
                        } else {
                            ?>

                            <img src="<?= $this->webroot ?>img/flatlab/user_no_image.jpg" alt="">

                        <? } ?>

                        <div class="task-thumb-details">
                            <h1><a href="#"><?= $result['Member']['names'] . ' ' . $result['Member']['lastnames'] ?></a></h1>
                            <p><?= $result['Title']['name'] ?></p>
                            <p><?= $result['Company']['name'] ?></p>
                            <?
                            if ($result['Member']['expert'] == '1') {
                                if ($result['Member']['expert']) {
                                    
                                }
                                ?>
                                <!-- imprimir votos en forma de estrella solo para expertos -->
                            <? } ?>
                        </div>
                        <?
                        if ($result['Member']['expert'] == '1') {
                            ?>
                            <div class="btn-group">
                                <a href="<?= $this->webroot . "members/makeCall/" . $result['Member']['id'] ?>" class="btn btn-info">Llamar</a>
                            </div> 
                        <? } ?>

                    </div>
                    <table class="table table-hover personal-task">
                        <tbody>
                            <tr>
                                <td>
                                    <i class=" fa fa-tasks"></i>
                                </td>
                                <td>Biografia</td>
                                <td><?= $result['Member']['bio'] ?></td>
                            </tr>
                            <? if ($result['Member']['expert'] == '1') { ?>
                                <tr>
                                    <td>
                                        <i class="fa fa-tasks"></i>
                                    </td>
                                    <td>Categor&iacute;a Experto</td>
                                    <td> <?= $result['ExpertRating']['name'] ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-tasks"></i>
                                    </td>
                                    <td>Experto</td>
                                    <td> <?= $result['Member']['expertstatus'] ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class=" fa fa-bell-o"></i>
                                    </td>
                                    <td>Fecha &Uacute;ltima Tarea</td>
                                    <td> <?= $result['Member']['lastdate'] ?></td>
                                </tr>
                            <? } ?>
                        </tbody>
                    </table>
                </section>
                <!--user info table end-->
            </div>
        </div>
        <?
    }
} 

