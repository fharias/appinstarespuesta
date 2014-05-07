
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Wilmer Alzate">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.png">


        <title>Insta Respuesta | Home</title>


        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<!--        <script type="text/javascript">

           var jQuery = jQuery.noConflict();

        </script>-->

        <?
//        echo $this->Html->script('front/flatlab/jquery');
        echo $this->Html->script('flatlab/modernizr.custom.79639');
//        echo $this->Html->script('front/flatlab/jquery-1.8.3.min');
        echo $this->Html->css('front/flatlab/bootstrap');
        echo $this->Html->css('front/flatlab/theme');
        echo $this->Html->css('front/flatlab/bootstrap-reset');
        //External css
        echo $this->Html->css('front/flatlab/font-awesome');
        echo $this->Html->css('front/flatlab/flexslider');
        echo $this->Html->css('front/flatlab/jquery.bxslider');
        echo $this->Html->css('front/flatlab/jquery.fancybox');

        echo $this->Html->css('front/flatlab/rs-style');
        echo $this->Html->css('front/flatlab/settings');
        echo $this->Html->css('front/flatlab/estilos');
        // custom styles 

        echo $this->Html->css('front/flatlab/style');
        echo $this->Html->css('front/flatlab/style-responsive');
        ?>


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!--header start-->
        <header class="header-frontend">

            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="fa fa-bars"></span>
                        </button>
                        <br>
                        <?
                        echo $this->Html->link(
                                $this->Html->image('front/flatlab/logohome.png'), array('controller' => 'members', 'action' => 'home'), array('escape' => false)
                        );
                        ?>


                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li class="active"><?= $this->Html->link('Home', array('controller' => 'members', 'action' => 'home')) ?></li>
                            <li><?= $this->Html->link('¿Cómo funciona?', array('controller' => 'members', 'action' => 'how')) ?></li>
                            <li><?= $this->Html->link('Respuesta Ya!', array('controller' => 'members', 'action' => 'query')) ?></li>
                            <li><?= $this->Html->link('Ser un Experto', array('controller' => 'members', 'action' => 'postulate')) ?></li>
                            <li><?= $this->Html->link('Mi Cuenta', array('controller' => 'members', 'action' => 'login')) ?></li>

                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--header end-->





        <h3><font color="red"><?php echo $this->Session->flash(); ?></font></h3>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    <center>
        <div id="contenedor">
            <img src="<?= $this->webroot ?>img/flatlab/img4.png" alt="Image 1"> 
            <!--            <a href="members/postulate" class="button grande amarillo clear">¡ Ser experto !</a>-->
        </div>   
    </center>
    <?= $this->fetch('content') ?>
    <!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <center> 
                        <a href="http://www.startupchile.org/congrats-welcome-to-start-up-chiles-9th-gen/" target="_blank" ><img src="<?= $this->webroot ?>img/flatlab/img1.png" alt="Image 1"></a>
                        <h4>Ganadores de la 9na<br/>Edición de Start-Up Chile</h4>
                    </center>
                </div>
                <div class="col-lg-3 col-sm-3">
                    <center> 
                        <a href="http://laidea.co/SF_Round" target="_blank" ><img src="<?= $this->webroot ?>img/flatlab/img2.png" alt="Image 1"></a>
                        <h4>Finalistas en la Idea Pitch<br/>Competition 2013</h4>
                    </center>
                </div>
                <div class="col-lg-2 col-sm-2">
                    <center> 
                        <a href="http://www.venturedaymadrid.com/#welcome" target="_blank" ><img src="<?= $this->webroot ?>img/flatlab/img3.png" alt="Image 1"></a>
                        <h4>Finalistas en IE Venture<br/>Day Madrid 2014</h4>
                    </center>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <ul class="social-link-footer list-unstyled">
                        <li><a href="mailto:info@instarespuesta.com"  target="_blank"><i class="fa fa-file"></i></a></li>
                        <li><a href="http://www.linkedin.com/profile/view?id=260373410&locale=en_US&trk=tyah&trkInfo=tas%3Ainstarespuesta%2Cidx%3A1-1-1" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/InstaRespuesta" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-phone"></i></a></li>
                        <li><a href="members/team"><h6>TEAM</h6></a></li>
                    </ul>
                    <a href=""><h1><font color="#ffffff">Terminos de Servicio</h1></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- js placed at the end of the document so the pages load faster -->

    <!--common script for all pages-->

    <?
    echo $this->Html->script('front/flatlab/bootstrap.min');
    echo $this->Html->script('front/flatlab/hover-dropdown');
    echo $this->Html->script('front/flatlab/jquery.flexslider');
    echo $this->Html->script('front/flatlab/jquery.bxslider');
    echo $this->Html->script('jquery.bpopup.min');
    echo $this->Html->script('front/flatlab/jquery.parallax-1.1.3');

    echo $this->Html->script('front/flatlab/jquery.easing.min');
    echo $this->Html->script('front/flatlab/link-hover');

    echo $this->Html->script('front/flatlab/jquery.fancybox.pack');

    echo $this->Html->script('front/flatlab/jquery.themepunch.plugins.min');
    echo $this->Html->script('front/flatlab/jquery.themepunch.revolution.min');

    echo $this->Html->script('front/flatlab/common-scripts');

    echo $this->Html->script('front/flatlab/revulation-slide');

    echo $this->fetch('script');
    ?>


    <script>

        RevSlide.initRevolutionSlider();

        $(window).load(function() {
            $('[data-zlname = reverse-effect]').mateHover({
                position: 'y-reverse',
                overlayStyle: 'rolling',
                overlayBg: '#fff',
                overlayOpacity: 0.7,
                overlayEasing: 'easeOutCirc',
                rollingPosition: 'top',
                popupEasing: 'easeOutBack',
                popup2Easing: 'easeOutBack'
            });
        });

        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });

    </script>

</body>
</html>
<script>

    $('.test-popup-link').magnificPopup({
        type: 'image'
                // other options
    });

    $(function() {
        setTimeout(function() {

            $("#dialog-form").dialog({
                autoOpen: true,
                height: 540,
                width: 700,
                modal: true,
                buttons: {
                    //                "Postulate": function() {
                    //                    
                    //                    
                    //                    $('#MemberAddForm').submit();
                    //                },
                    Cancelar: function() {
                        $(this).dialog("close");
                    }
                }
            });

            //            $('.dialog-form').magnificPopup({
            //                type: 'inline',
            //                preloader: false,
            ////                focus: '#name',
            //                // When elemened is focused, some mobile browsers in some cases zoom in
            //                // It looks not nice, so we disable it:
            //                callbacks: {
            //                    beforeOpen: function() {
            //                        if ($(window).width() < 700) {
            //                            this.st.focus = false;
            //                        } else {
            ////                            this.st.focus = '#name';
            //                        }
            //                    }
            //                }
            //            });

        }, 5000);


    });
</script>

<div id="dialog-form" class="dialog-form" font-size="11" title="Consulta" hidden="hidden">

    <div class="col-lg-2 col-sm-2 address">

    </div>
    <div class="col-lg-7 col-sm-7 address">
        <? echo $this->Form->create('Member'); ?>
        <h5><label>Para conectarse al especialista adecuado, selecciona tus áreas de asesoría (Selección múltiple)<font color="red"> *</font></label> </h5>
        <h6><? echo $this->Form->input('Skill', array('label' => false, 'multiple' => 'checkbox')); ?></h6>
        <div class="contact-form">
            <form role="form">
                <div class="form-group">
                    <h6><label for="query">Descripción breve de la consulta <font color="red"> *</font></label></h6>
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
                    <h6><label for="charge">Tiempo estimado de la consulta<font color="red"> *</font></label></h6>
                    <? echo $this->Form->input('time_query', array('label' => false, 'options' => $options, 'empty' => 'Seleccione', 'required' => 'required')); ?>
                </div>

                <div class="form-group">
                    <h6><label for="username">Email <font color="red"> *</font></label></h6>
                    <? echo $this->Form->input('username', array('label' => false, 'placeholder' => 'nombre@dominio.cl', 'type' => 'email', 'required' => 'required')); ?>
                </div>

                <button class="btn btn-info" type="submit">Entregar</button>
            </form>

        </div>
    </div>

</div>
