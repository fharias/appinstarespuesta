<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
<?php
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('bootstrap-reset');
        echo $this->Html->css('component');
        echo $this->Html->css('modernizr.custom');
        echo $this->Html->css('style');
        echo $this->Html->css('style-responsive');

           if(isset($this->params['url']['estado'])){
            $Mensaje = $this->params['url']['estado'];  
            } else{
            $Mensaje= "";    
            }
            
    
?>
    
    
    </head>
  <body class="login-body">
      
   <div class="container">

        
   <?php if(strcmp($Mensaje,"3") == 0 ){?>
        
     <div class="alert alert-block alert-danger fade in" style="display:block"  >
     <button data-dismiss="alert" class="close close-sm" type="button">
     <i class="fa fa-times"></i>
     </button>
     <strong>Error !!!</strong> No se pudo recuperar su clave de acceso.
     </div>
     
        
   <?php }
   
   else if(strcmp($Mensaje,"2") == 0 ){?>
        
     <div class="alert alert-warning fade in" style="display:block">
     <button data-dismiss="alert" class="close close-sm" type="button">
     <i class="fa fa-times"></i>
     </button>
     <strong>Advertencia !!!</strong> El correo electronico no se encuentra registrado
     </div>
       
    <?php }
   
     else if(strcmp($Mensaje,"1") == 0 ){?>
      
     <div class="alert alert-info fade in" style="display:block">
     <button data-dismiss="alert" class="close close-sm" type="button">
     <i class="fa fa-times"></i>
     </button>
     <strong> Felicidades !!! </strong> Hemos enviado un correo electronico con tu nueva clave.
     </div>
     
     <?php }
   
     else if(strcmp($Mensaje,"4") == 0 ){?>
      
    <div class="alert alert-block alert-danger fade in" style="display:block"  >
     <button data-dismiss="alert" class="close close-sm" type="button">
     <i class="fa fa-times"></i>
     </button>
     <strong>Error !!!</strong> No hemos podido registrar tu usuario.
     </div>
     
     <?php }
   
     else if(strcmp($Mensaje,"5") == 0 ){?>
        
     <div class="alert alert-warning fade in" style="display:block">
     <button data-dismiss="alert" class="close close-sm" type="button">
     <i class="fa fa-times"></i>
     </button>
     <strong>Advertencia !!!</strong> Tu correo electronico ya esta registrado.
     </div>
       
       <?php }
   
     else if(strcmp($Mensaje,"6") == 0 ){?>
        
     <div class="alert alert-block alert-danger fade in" style="display:block">
     <button data-dismiss="alert" class="close close-sm" type="button">
     <i class="fa fa-times"></i>
     </button>
     <strong>Problemas de Autenticación !!!</strong> Usuario invalido, intente nuevamente.
     </div>
       <?php }
   
     else if(strcmp($Mensaje,"7") == 0 ){?>
        
     <div class="alert alert-block alert-danger fade in" style="display:block">
     <button data-dismiss="alert" class="close close-sm" type="button">
     <i class="fa fa-times"></i>
     </button>
     <strong>Problemas de Autenticación !!!</strong> Accion invalida, intente nuevamente.
     </div>
       
     <?php }?>
        <?=$this->Form->create(null, array('controller'=>'members','class'=>'form-signin', 'action'=>'login'))?>

        <h2 class="form-signin-heading">Ingresa Ahora.</h2>
        <div class="login-wrap">
         <?=$this->Form->input('username', array('placeholder'=>'Correo Electronico', 'label'=>false, 'class'=>'form-control placeholder-no-fix','required' ))?>
         <?=$this->Form->input('password', array('placeholder'=>'Clave', 'label'=>false, 'type'=>'password','class'=>'form-control placeholder-no-fix','required'))?>
            <label class="checkbox">
            <input type="checkbox" value="remember-me"> Recordarme
            <span class="pull-right">
            <a data-toggle="modal" href="#myModal"> ¿Olvidó su clave?</a>
            </span>
            </label>

            <button class="btn btn-lg btn-login btn-block" type="submit">Iniciar Sesión</button>
            <p>Puede abrir una sesión a través de red social</p>
            <div class="login-social-link">
                <a href="/Members" class="facebook">
                    <i class="fa fa-facebook"></i>
                    Facebook
                </a>
                <a href="/Members" class="twitter">
                    <i class="fa fa-twitter"></i>
                    Twitter
                </a>
            </div>
            <div class="registration">
                </br>
                ¿No tienes una cuenta todavía?  </br> </br>
               <a data-toggle="modal" href="#myModalReg"> Crear una cuenta </a>

               
            </div>
        
      </form>

          
    </div>  
        
        
          <!-- Modal -->

   <?=$this->Form->create(null, array('controller'=>'members','class'=>'form-signin', 'action'=>'recovery'))?>

          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">¿Olvidó su clave?</h4>
                      </div>
               
          
                      <div class="modal-body">
                          <p>Introduzca su dirección de correo electrónico a continuación para restablecer la contraseña.</p>
                             <?=$this->Form->input('username', array('placeholder'=>'Correo Electronico', 'label'=>false,'class'=>'form-control placeholder-no-fix','required'))?>
                          </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                          <button class="btn btn-success" type="submit">Enviar</button>
                      </div>
                  </div>
              </div>
          </div>
</form>

          <!-- modal -->

 <?=$this->Form->create(null, array('controller'=>'members','class'=>'form-signin', 'action'=>'add'))?>
          
          <!-- Modal Registro -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalReg" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Registro ahora</h4>
                      </div>
                      
                            
                      <div class="modal-body">
                          <p>Introduzca su información personal.</p>
                           <div class="login-wrap">
                          <?=$this->Form->input('username', array('placeholder'=>'Correo Electronico (obligatorio)', 'label'=>false,'class'=>'form-control','required'))?>
                          <?=$this->Form->input('names', array('placeholder'=>'Nombres (obligatorio)', 'label'=>false,'class'=>'form-control','required'))?>
                          <?=$this->Form->input('lastnames', array('placeholder'=>'Apellidos (obligatorio)', 'label'=>false,'class'=>'form-control','required'))?>
                          <p>Ingrese los datos de su cuenta contacto </p>
                          <?=$this->Form->input('facebookid', array('placeholder'=>'Facebook', 'label'=>false,'class'=>'form-control','required'))?>
                          <?=$this->Form->input('twitterid', array('placeholder'=>'Twitter', 'label'=>false,'class'=>'form-control','required'))?>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancelar</button>
                          <button class="btn btn-success" type="submit">Registrarse</button>
                      </div>
                          
                  </div>
              </div>
          </div>
          <!-- modal -->
</form>
        
          
        </div>

        
        
        
        



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
