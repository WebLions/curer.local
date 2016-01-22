<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">


    <?php echo link_tag('bootstrap/css/bootstrap.min.css'); ?>
    <?php echo link_tag('bootstrap/css/bootstrap-theme.css'); ?>
    <?php echo link_tag('bootstrap/css/elegant-icons-style.css'); ?>
    <?php echo link_tag('bootstrap/css/font-awesome.min.css'); ?>
    <?php echo link_tag('bootstrap/css/owl.carousel.css'); ?>
    <?php echo link_tag('bootstrap/css/fullcalendar.css'); ?>
    <?php echo link_tag('bootstrap/css/widgets.css'); ?>
    <?php echo link_tag('bootstrap/css/style-responsive.css'); ?>
    <?php echo link_tag('bootstrap/css/xcharts.min.css'); ?>
    <?php echo link_tag('bootstrap/css/jquery-ui-1.10.4.min.css'); ?>
    <?php echo link_tag('bootstrap/css/jquery-jvectormap-1.2.2.css'); ?>
    <?php echo link_tag('bootstrap/css/style.css'); ?>


</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">Вы зашли как: <?=$_SESSION['fio']?></div>
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="sub-menu <?=($active=="home")? 'active' : ''?>">
                    <a class="" href="/user/home">
                        <i class="icon_house_alt"></i>
                        <span>Главная</span>
                    </a>
                </li>
                <? if($_SESSION['access'] == 1){?>
                <li class="sub-menu <?=($active=="ulist")? 'active' : ''?>">
                    <a href="/user/ulist" class="">
                        <i class="icon_group"></i>
                        <span>Пользователи</span>
                    </a>
                </li>
                <? } ?>

                <li class="sub-menu <?=($active=="clist")? 'active' : ''?>">
                    <a href="/user/clist" class="">
                        <i class="icon_id-2"></i>
                        <span>Контрагенты</span>
                    </a>
                </li>

                <li class="sub-menu <?=($active=="courlist")? 'active' : ''?>">
                    <a href="/user/courlist" class="">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>Курьеры</span>
                    </a>
                </li>

                <li class="sub-menu <?=($active=="olist")? 'active' : ''?>">
                    <a href="/user/olist" class="">
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        <span>Заказы</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="/user/logout" class="">
                        <i class="icon_lock_alt"></i>
                        <span>Выход</span>
                    </a>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->