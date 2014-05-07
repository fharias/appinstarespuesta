<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'Instarespuesta: expertos al alcance de un clic');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title><?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?></title>
        <meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
        <meta name="keywords" content="instarespuesta, experts, facebook, startup" />
        <meta name="author" content="Wilmer Alzate" />
        <?
        echo $this->Html->css('normalize');
        echo $this->Html->css('demo');
        echo $this->Html->css('component');
        echo $this->Html->script('modernizr.custom');
        echo $this->Html->script('classie');
        echo $this->Html->script('gnmenu');
        echo $this->Html->script('jquery-1.7.2.min');
        echo $this->Html->script('jquery-ui.1.8.20.min');
        echo $this->Html->css('login');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>

    </head>
    <body bgcolor="">
        <div class="container">
            <ul id="gn-menu" class="gn-menu-main">
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller">
                            <ul class="gn-menu">
                                <li class="gn-search-item">
                                    <?=$this->Form->create(null, array('controller'=>'members', 'action'=>'search', 'name'=>'search-form', 'id'=>'search-form'))?>
                                    <input placeholder="Buscar" type="search" class="gn-search" name="search">
                                    <a class="gn-icon gn-icon-search" ><span>Buscar</span></a>
                                    <?=$this->Form->End()?>
                                </li>
                                <li><a class="gn-icon gn-icon-cog" href="/members/">Dashboard</a></li>
                                <li><a class="gn-icon gn-icon-cog" href="/members/edit">Perfil</a></li>
                                <li><a class="gn-icon gn-icon-cog" href="/members/skill">Mis Aptitudes</a></li>
                                <li><a class="gn-icon gn-icon-cog" href="/members/restart">Cambiar Clave</a></li>
                                <li><a class="gn-icon gn-icon-cog" href="/accounts/social">Social</a></li>
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
                <li><a href="/members/logout">Salir</a></li>
            </ul>
            <?= $this->fetch('content') ?>

            
        </div><!-- /container -->
        <script>
            new gnMenu(document.getElementById('gn-menu'));
            $('.gn-search').keypress(function(e) {
                 if (e.keyCode == 13) {
                     $('search-form').submit();
                 }
            });
        </script>
    </body>
</html>