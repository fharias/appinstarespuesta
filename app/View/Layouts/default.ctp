<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Wilmer Alzate">
        <meta name="keyword" content="insta, respuesta, expertos, tag, categorias, trabajo, contratar, atender, llamar">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>Insta Respuesta</title>

        <!-- Bootstrap core CSS -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="http://code.jquery.com/jquery-2.1.0.js" type="text/javascript"></script>
        <script  src = "http://code.jquery.com/jquery-1.8.3.js"  type = "text/javascript" ></script> 
        <script  src = "http://code.jquery.com/ui/1.9.2/jquery-ui.js"  type = "text/javascript" ></script> 
        
        <?
        echo $this->Html->css('flatlab/component');
        echo $this->Html->css('flatlab/demo');
        echo $this->Html->css('flatlab/bootstrap.min');
        echo $this->Html->css('flatlab/bootstrap-reset');
        echo $this->Html->css('flatlab/font-awesome');
        echo $this->Html->css('flatlab/jquery.easy-pie-chart');
        echo $this->Html->css('flatlab/owl.carousel');
        echo $this->Html->css('flatlab/style');
        echo $this->Html->css('flatlab/style-responsive');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        ?>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <!-- Body start -->
    <body>

        <section id="container" >
            <!--header start-->
            <header class="header white-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <!--<a href="index.html" class="logo">Insta<span>Respuesta</span></a>--> 
                <?php
                echo $this->Html->link('Insta Respuesta', array('controller' => 'members', 'action' => 'dashboard'), array('escape' => false, 'class' => 'logo'));
                ?>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                        <!-- settings start -->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="fa fa-tasks"></i>
                                <span class="badge bg-success">6</span>
                            </a>
                            <ul class="dropdown-menu extended tasks-bar">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">You have 6 pending tasks</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Dashboard v1.3</div>
                                            <div class="percent">40%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Database Update</div>
                                            <div class="percent">60%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Iphone Development</div>
                                            <div class="percent">87%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                                <span class="sr-only">87% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Mobile App</div>
                                            <div class="percent">33%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                                <span class="sr-only">33% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div class="desc">Dashboard v1.3</div>
                                            <div class="percent">45%</div>
                                        </div>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                <span class="sr-only">45% Complete</span>
                                            </div>
                                        </div>

                                    </a>
                                </li>
                                <li class="external">
                                    <a href="#">See All Tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- settings end -->
                        <!-- inbox dropdown start-->
                        <li id="header_inbox_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-important">5</span>
                            </a>
                            <ul class="dropdown-menu extended inbox">
                                <div class="notify-arrow notify-arrow-red"></div>
                                <li>
                                    <p class="red">You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="<?= $this->webroot ?>img/flatlab/avatar-mini.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Jonathan Smith</span>
                                            <span class="time">Just now</span>
                                        </span>
                                        <span class="message">
                                            Hello, this is an example msg.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="<?= $this->webroot ?>img/flatlab/avatar-mini2.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Jhon Doe</span>
                                            <span class="time">10 mins</span>
                                        </span>
                                        <span class="message">
                                            Hi, Jhon Doe Bhai how are you ?
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="<?= $this->webroot ?>img/flatlab/avatar-mini3.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Jason Stathum</span>
                                            <span class="time">3 hrs</span>
                                        </span>
                                        <span class="message">
                                            This is awesome dashboard.
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo"><img alt="avatar" src="<?= $this->webroot ?>img/flatlab/avatar-mini4.jpg"></span>
                                        <span class="subject">
                                            <span class="from">Jondi Rose</span>
                                            <span class="time">Just now</span>
                                        </span>
                                        <span class="message">
                                            Hello, this is metrolab
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- inbox dropdown end -->
                        <!-- notification dropdown start-->
                        <li id="header_notification_bar" class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                                <i class="fa fa-bell-o"></i>
                                <span class="badge bg-warning">7</span>
                            </a>
                            <ul class="dropdown-menu extended notification">
                                <div class="notify-arrow notify-arrow-yellow"></div>
                                <li>
                                    <p class="yellow">You have 7 new notifications</p>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        Server #3 overloaded.
                                        <span class="small italic">34 mins</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                        Server #10 not respoding.
                                        <span class="small italic">1 Hours</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        Database overloaded 24%.
                                        <span class="small italic">4 hrs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-success"><i class="fa fa-plus"></i></span>
                                        New user registered.
                                        <span class="small italic">Just now</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                                        Application error.
                                        <span class="small italic">10 mins</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">See all notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- notification dropdown end -->
                    </ul>
                    <!--  notification end -->
                </div>
                <div class="top-nav ">
                    <!--search & user info start-->
                    <ul class="nav pull-right top-menu">
                        <li>
                            <?= $this->Form->create(null, array('controller' => 'members', 'action' => 'search', 'name' => 'search-form', 'id' => 'search-form')) ?>

                            <? // echo $this->Form->input('search',array('name'=>'search','label'=>false,'type'=>'search','placeholder'=>'Buscar','class'=>'form-control search'))?>
                            <input placeholder="Buscar" type="search" class="form-control search" name="search">


                            <?= $this->Form->End() ?>
                        </li>

                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="username"><?= $this->Session->read('Auth.User.names') . ' ' . $this->Session->read('Auth.User.lastnames') ?></span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout">
                                <div class="log-arrow-up"></div>
                                <li><?php echo $this->Html->link('Mi Perfil', array('controller' => 'members', 'action' => 'edit',$this->Session->read('Auth.User.id'))); ?></li>
                                <li><?php echo $this->Html->link('Mi Imagen', array('controller' => 'members', 'action' => 'updateAvatar')); ?></li>
                                <li><?php echo $this->Html->link('Mi Contraseña', array('controller' => 'members', 'action' => 'restart')); ?></li>
                                <li><?php echo $this->Html->link('Salir', array('controller' => 'members', 'action' => 'logout')); ?></li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!--search & user info end-->
                </div>
            </header>
            <!--header end-->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <li>
                            <?php
                            echo $this->Html->link('Dashboard', array('controller' => 'members', 'action' => 'dashboard'), array('escape' => false, 'class' => 'active'));
                            ?>
                        </li>
                        
                        <li>
                            <?php
                            echo $this->Html->link('Buscar Experto', array('controller' => 'members', 'action' => 'expert'), array('escape' => false, 'class' => 'active'));
                            ?>
                        </li>

                        <li>
                            <?php
                            echo $this->Html->link('Mis Aptitudes', array('controller' => 'members', 'action' => 'skill'), array('escape' => false, 'class' => 'active'));
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('Mis Citas', array('controller' => 'meetings', 'action' => 'show'), array('escape' => false, 'class' => 'active'));
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('Mis Llamados', array('controller' => 'members', 'action' => 'makeCall'), array('escape' => false, 'class' => 'active'));
                            ?>
                        </li>
                        <li>
                            <?php
                            echo $this->Html->link('Mis Pagos', array('controller' => 'accounts', 'action' => 'billing'), array('escape' => false, 'class' => 'active'));
                            ?>
                        </li>
                         <li>
                            <?php
                            echo $this->Html->link('Social', array('controller' => 'accounts', 'action' => 'social'), array('escape' => false, 'class' => 'active'));
                            ?>
                        </li>
                        <!--multi level menu end-->

                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <!--content-->
                    <? echo $this->fetch('content') ?>

                </section>
            </section>
            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2014 &copy; Insta Respuesta.
                    <a href="#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->

        <?
        echo $this->Html->script('flatlab/bootstrap.min');
        echo $this->Html->script('flatlab/jquery.dcjqaccordion.2.7');
        echo $this->Html->script('flatlab/jquery.scrollTo.min');
        echo $this->Html->script('flatlab/jquery.nicescroll');
        echo $this->Html->script('flatlab/jquery.sparkline');
        echo $this->Html->script('flatlab/gnmenu');
        echo $this->Html->script('flatlab/modernizr.custom');
        echo $this->Html->script('flatlab/classie');
        echo $this->Html->script('flatlab/jquery.easy-pie-chart');
        echo $this->Html->script('flatlab/owl.carousel');
        echo $this->Html->script('flatlab/jquery.customSelect.min');
        echo $this->Html->script('flatlab/respond.min');
        echo $this->Html->script('flatlab/sparkline-chart');
        echo $this->Html->script('flatlab/common-scripts');
        echo $this->Html->script('flatlab/easy-pie-chart');
        echo $this->Html->script('flatlab/count');

        echo $this->fetch('script');
        ?>

        <script>

            //owl carousel

            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    navigation: true,
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true,
                    autoPlay: true

                });
            });

            //custom select box

            $(function() {
                $('select.styled').customSelect();
            });

        </script>

    </body>
</html>
