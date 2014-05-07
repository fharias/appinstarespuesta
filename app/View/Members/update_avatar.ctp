<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<header>
    <h1>Mi Avatar</h1>
</header>
<?
if (isset($user)) {

    echo $this->Form->create('Member', array('controller' => 'members', 'action' => 'updateAvatar', 'enctype' => 'multipart/form-data'));
    foreach ($user as $usuario) {
        ?>

        <div class="row">
            <div class="col-lg-4">
                <!--user info table start-->
                <section class="panel">
                    <div class="panel-body">
                        <?
                        
                        $id = $usuario['Member']['id'];
                        $imagen = $usuario['Member']['image'];


                        $url = "avatars/" . $id . "/" . $imagen;

                        if ($usuario['Member']['image'] != null) {
                            
                           echo $this->Html->image($url, array('width'=>'200px'));
                            ?>
                        <? } else {
                            ?>

                            <img src="<?= $this->webroot ?>img/flatlab/user_no_image.jpg" alt="">

                        <? } ?>
                      
        
                    </div>
                    <div><?
                        echo $this->Form->input('file', array('label'=>'Imagen','type' => 'file'));?>
                        <br>
                        <?
                    echo $this->Form->end('Subir Imagen');
                    ?>
                    </div>
                  
                </section>
                <!--user info table end-->
            </div>
        </div>
        <?
    }
} else {
    echo 'No se encontraron resultados';
}
