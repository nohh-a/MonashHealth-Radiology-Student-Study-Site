<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <title>Case List</title>
    <?= $this->Html->meta('icon', 'favicon.ico', ['type' => 'image/x-icon']) ?>
    <?= $this->Html->css('/assets/css/master.css') ?>
    <?= $this->Html->css('/assets/plugins/iview/css/iview.css') ?>
    <?= $this->Html->css('/assets/plugins/iview/css/skin/style.css', ['class' => 'skin']) ?>

    <?= $this->Html->script('/assets/plugins/jquery/jquery-1.11.1.min.js') ?>


</head>


<body>

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->


<div id="this-top" class="layout-theme animated-css" data-header="sticky" data-header-top="200">

    <div id="wrapper">

        <!-- HEADER -->
        <div class="header">


            <div class="header__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <a href="<?= $this->Url->build('/') ?>" class="logo">
                                <img class="logo__img img-responsive" src="webroot/img/logo.png" height="50" width="111"
                                     alt="Logo">
                            </a>
                            <div class="navbar yamm">
                                <div class="navbar-header hidden-md hidden-lg hidden-sm">
                                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1"
                                            class="navbar-toggle"><span class="icon-bar"></span><span
                                            class="icon-bar"></span><span class="icon-bar"></span></button>
                                    <a href="javascript:void(0);" class="navbar-brand"></a></div>
                                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="<?= $this->Url->build('/') ?>">HOME</a></li>
                                        <li><a href="vehicle-listings.html">VEHICLE LISTINGS</a></li>
                                        <li><a href="car-details.html">CAR DETAILS</a></li>
                                        <li class="dropdown"><a href="news.html">NEWS</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="news-grid.html">DROPDOWN</a></li>
                                                <li><a href="news-details.html">DROPDOWN</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="news-grid.html">NEWS GRID</a></li>
                                        <li><a href="news-details.html">NEWS DETAILS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end container -->
            </div><!-- end header__inner -->
        </div><!-- end header -->

        <!-- SCRIPTS -->
        <?= $this->Html->script('/assets/js/jquery-migrate-1.2.1.js'); ?>
        <?= $this->Html->script('/assets/plugins/bootstrap/js/bootstrap.min.js'); ?>
        <?= $this->Html->script('/assets/js/modernizr.custom.js'); ?>
        <?= $this->Html->script('/assets/plugins/owl-carousel/owl.carousel.min.js'); ?>
        <?= $this->Html->script('/assets/js/waypoints.min.js'); ?>
        <?= $this->Html->script('/assets/plugins/prettyphoto/js/jquery.prettyPhoto.js'); ?>
        <?= $this->Html->script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'); ?>
        <?= $this->Html->script('/assets/plugins/jelect/jquery.jelect.js'); ?>
        <?= $this->Html->script('/assets/plugins/nouislider/jquery.nouislider.all.min.js'); ?>
        <?= $this->Html->script('/assets/plugins/flexslider/jquery.flexslider.js'); ?>

        <!--THEME-->
        <?= $this->Html->script('/assets/js/cssua.min.js'); ?>
        <?= $this->Html->script('/assets/js/wow.min.js'); ?>
        <?= $this->Html->script('/assets/js/custom.js'); ?>

