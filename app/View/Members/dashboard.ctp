<?
    $user = $this->Session->read('Auth.User');
?>
<header>
    <h1>Bienvenido a Insta Respuesta 
    <span>
        
    <?
        if($this->Session->read('Auth.User.expert')=='1')
            echo $this->Html->image("flatlab/verified_".$this->Session->read('Auth.User.verificationstatus').".png", array('width'=>'54', 'height'=>'52'))
    ?>
    </span>
        <span><b><?= $this->Session->read('Auth.User.names') .' '.$this->Session->read('Auth.User.lastnames')?></b>, actualmente nos encontramos desarrollando nuestra aplicaci&oacute;n pero muy pronto podr&aacute;s usarla completamente.</span></h1>	

</header>  