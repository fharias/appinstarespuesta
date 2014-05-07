
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Wilmer Alzate">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>Insta Respuesta | Registro</title>

        <!-- Bootstrap core CSS -->
        <?
        echo $this->Html->css('front/flatlab/bootstrap.min');
        echo $this->Html->css('front/flatlab/theme');
        echo $this->Html->css('front/flatlab/bootstrap-reset');
        //External css
        echo $this->Html->css('front/flatlab/font-awesome');
        echo $this->Html->css('front/flatlab/flexslider');
        echo $this->Html->css('front/flatlab/jquery.bxslider');
        echo $this->Html->css('front/flatlab/jquery.fancybox');

        echo $this->Html->css('front/flatlab/rs-style');
        echo $this->Html->css('front/flatlab/settings');

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
                                $this->Html->image('front/flatlab/logohome.png'),array('controller'=>'members','action'=>'home'), array('escape' => false)
                        );
                        ?>
                    </div>
                   <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li><?= $this->Html->link('Home', array('controller' => 'members', 'action' => 'home')) ?></li>
                            <li><?= $this->Html->link('¿Cómo funciona?', array('controller' => 'members', 'action' => 'how')) ?></li>
                             <li  class="active"><?= $this->Html->link('Respuesta Ya!', array('controller' => 'members', 'action' => 'query')) ?></li>
                            <li><?= $this->Html->link('Ser un Experto', array('controller' => 'members', 'action' => 'postulate')) ?></li>
                            <li><?= $this->Html->link('Mi Cuenta', array('controller'=>'members','action'=>'login')) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--header end-->
        <h3><font color="red"><?php echo $this->Session->flash(); ?></font></h3>
        <?= $this->fetch('content') ?>
        </br>
        </br>
        </br>
        </br>
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
        echo $this->Html->script('front/flatlab/jquery');
        echo $this->Html->script('front/flatlab/jquery-1.8.3.min');
        echo $this->Html->script('front/flatlab/bootstrap.min');
        echo $this->Html->script('front/flatlab/hover-dropdown');
        echo $this->Html->script('front/flatlab/jquery.flexslider');
        echo $this->Html->script('front/flatlab/jquery.bxslider');

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

            //    fancybox
            jQuery(".fancybox").fancybox();



        </script>

    </body>
</html>
