<?php
$this->disableAutoLayout();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <title>Case Detail</title>
    <?= $this->Html->meta('icon', 'favicon.ico', ['type' => 'image/x-icon']) ?>
    <?= $this->Html->css('/assets/css/master.css') ?>
    <?= $this->Html->css('/assets/plugins/iview/css/iview.css') ?>
    <?= $this->Html->css('/assets/plugins/iview/css/skin/style.css', ['class' => 'skin']) ?>

    <!-- SWITCHER -->
    <?= $this->Html->css('/assets/plugins/switcher/css/switcher.css', ['id' => 'switcher-css', 'media' => 'all']) ?>
    <?= $this->Html->css('/assets/plugins/switcher/css/color1.css', ['title' => 'color1', 'media' => 'all', 'rel' => 'alternate stylesheet']) ?>
    <?= $this->Html->css('/assets/plugins/switcher/css/color2.css', ['title' => 'color2', 'media' => 'all', 'rel' => 'alternate stylesheet']) ?>
    <?= $this->Html->css('/assets/plugins/switcher/css/color3.css', ['title' => 'color3', 'media' => 'all', 'rel' => 'alternate stylesheet']) ?>
    <?= $this->Html->css('/assets/plugins/switcher/css/color4.css', ['title' => 'color4', 'media' => 'all', 'rel' => 'alternate stylesheet']) ?>
    <?= $this->Html->css('/assets/plugins/switcher/css/color5.css', ['title' => 'color5', 'media' => 'all', 'rel' => 'alternate stylesheet']) ?>

    <?= $this->Html->script('/assets/plugins/jquery/jquery-1.11.1.min.js') ?>

</head>


<body>
<div  id="this-top" class="layout-theme animated-css"  data-header="sticky" data-header-top="200"  >

    <!-- Start Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
            <div class="form_holder">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="predefined_styles">
                            <div class="skin-theme-switcher">
                                <h4>Color</h4>
                                <a href="javascript:void(0);" data-switchcolor="color1" class="styleswitch" style="background-color:#fe5656;"> </a>
                                <a href="javascript:void(0);" data-switchcolor="color2" class="styleswitch" style="background-color:#4fb0fd;"> </a>
                                <a href="javascript:void(0);" data-switchcolor="color3" class="styleswitch" style="background-color:#ffc73c;"> </a>
                                <a href="javascript:void(0);" data-switchcolor="color4" class="styleswitch" style="background-color:#ff8300;"> </a>
                                <a href="javascript:void(0);" data-switchcolor="color5" class="styleswitch" style="background-color:#02cc8b;"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->Html->script('/assets/plugins/switcher/js/bootstrap-select.js'); ?>
        <?= $this->Html->script('/assets/plugins/switcher/js/evol.colorpicker.min.js'); ?>
        <?= $this->Html->script('/assets/plugins/switcher/js/dmss.js'); ?>

    </div>
    <!-- End Switcher -->

    <div id="wrapper">

        <!-- HEADER -->
        <div class="header">

            <div class="header__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <a href="<?= $this->Url->build('/') ?>" class="logo">
                                <img class="logo__img img-responsive" src="<?= $this->Url->image('logo.png') ?>" height="50" width="111" alt="Logo">
                            </a>
                            <div class="navbar yamm">
                                <div class="navbar-header hidden-md hidden-lg hidden-sm">
                                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                    <a href="javascript:void(0);" class="navbar-brand"></a> </div>
                                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="home.html">HOME</a></li>
                                        <li><a href="vehicle-listings.html">VEHICLE LISTINGS</a> </li>
                                        <li><a href="car-details.html">CAR DETAILS</a></li>
                                        <li class="dropdown" ><a href="news.html">NEWS</a>
                                            <ul role="menu" class="dropdown-menu">
                                                <li> <a href="news-grid.html">DROPDOWN</a> </li>
                                                <li> <a href="news-details.html">DROPDOWN</a> </li>
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

        <div class="block-title">
            <div class="block-title__inner section-bg section-bg_second">
                <div class="bg-inner">
                    <h1 class="ui-title-page">car details</h1>
                    <div class="decor-1 center-block"></div>
                    <ol class="breadcrumb">
                        <li><a href="#">HOME</a></li>
                        <li class="active">car details</li>
                    </ol>
                </div><!-- end bg-inner -->
            </div><!-- end block-title__inner -->
        </div><!-- end block-title -->

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <main class="main-content">
                        <article class="car-details">
                            <div class="car-details__wrap-title clearfix">
                                <h2 class="car-details__title">Chevrolet Impala</h2>
                                <div class="car-details__wrap-price"><span class="car-details__price"><span class="car-details__price-inner">$27,920</span></span></div>
                            </div>

                            <div id="slider-product" class="flexslider slider-product">
                                <ul class="slides">
                                    <li>
                                        <a href="assets/media/slider_product/large/1.jpg" > **image link here !!!
                                            <img class="img-responsive" src="<?= $this->Url->image('/assets/media/slider_product/large/1.jpg') ?>" height="430" width="770" alt="Logo">
                                        </a>
                                    </li>
                                </ul>
                            </div>


                            <!-- Nav tabs -->
                            <div class="wrap-nav-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">vehicle DESCRIPTION</a></li>
                                    <li><a href="#tab2" data-toggle="tab">features</a></li>
                                    <li><a href="#tab3" data-toggle="tab">inquiry</a></li>
                                </ul>
                            </div>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <h3 class="ui-title-inner">Lorem ipsum dolor sit amet consectetur</h3>
                                    <div class="decor-1"></div>
                                    <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                    <p>Wliquam sit amet urna sed vel nullam semper aiber vestiblum fringilla orem ipsum dolor sit amet consectetur adipisc ing elit sed don eiusmod tempor incididunt ut labore et dolore magna aliquaa enimd ads minim veniam quis nostrud Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor. Lorem ipsum dolor sit amet consec tetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p>Aiber vestiblum fringilla orem ipsum dolor sit amet consectetur adipisc ing elit sed don eiusmod tempor incididunt ut labore et dolore magna aliquaa enimd ads minim veniam quis nostrud Lorem ipsum dolor sit amet consectetur adipis cing elit sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                    <p>Elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostru dare exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irue dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div class="tab-pane" id="tab2">
                                    <h3 class="ui-title-inner">Lorem ipsum dolor</h3>
                                    <div class="decor-1"></div>
                                    <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <h3 class="ui-title-inner">Sit amet consectetur</h3>
                                    <div class="decor-1"></div>
                                    <p>Aiber vestiblum fringilla orem ipsum dolor sit amet consectetur adipisc ing elit sed don eiusmod tempor incididunt ut labore et dolore magna aliquaa enimd ads minim veniam quis nostrud Lorem ipsum dolor sit amet consectetur adipis cing elit sed do eiusmod tempor. Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                    <p>Elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostru dare exercitation ullamco laboris nisi aliquip ex ea commodo consequat. Duis aute irue dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>

                            <div class="panel-group accordion" id="accordion-1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1"><i class="icon"></i></a>
                                        <h3 class="panel-title">exterior & interior</h3>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperia eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        </div>
                                    </div>
                                </div><!-- end panel -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2"><i class="icon"></i></a>
                                        <h3 class="panel-title">safety features</h3>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperia eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        </div>
                                    </div>
                                </div><!-- end panel -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3"><i class="icon"></i></a>
                                        <h3 class="panel-title">Entertainment</h3>
                                    </div>
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperia eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        </div>
                                    </div>
                                </div><!-- end panel -->
                            </div><!-- end accordion -->
                        </article>

                    </main><!-- end main-content -->
                </div><!-- end col -->


                <div class="col-md-4">
                    <aside class="sidebar">
                        <section class="widget">
                            <h3 class="widget-title">Specifications</h3>
                            <div class="decor-1"></div>
                            <div class="widget-content">
                                <dl class="list-descriptions list-unstyled">
                                    <dt>MAke / model:</dt>
                                    <dd>Chevrolet Impala</dd>
                                    <dt>MAke year:</dt>
                                    <dd>January 2016</dd>
                                    <dt>vehicle type:</dt>
                                    <dd>Front-engine, front-wheel-drive, 5-passenger, 4-door sedan</dd>
                                    <dt>ENGINE TYPE:</dt>
                                    <dd>DOHC 16-valve inline-4, aluminum block and head, direct fuel injection</dd>
                                    <dt>DIMENSIONS:</dt>
                                    <dd>Wheelbase: 111.7 in<br>
                                        Length: 201.3 in<br>
                                        Width: 73.0 in Height: 58.9 in<br>
                                        Curb weight: 3700 lb
                                    </dd>
                                    <dt>TRANSMISSION:</dt>
                                    <dd>6-speed automatic with manual shifting mode</dd>
                                    <dt>fuel economy:</dt>
                                    <dd>EPA city/highway: 21/31 mpg</dd>
                                    <dt>Passenger Capacity:</dt>
                                    <dd>5 Seats</dd>
                                </dl>
                            </div>
                        </section>



                    </aside>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->



        <footer class="footer">

            <div class="footer__wrap-btn"> <a class="footer__btn scroll" href="#this-top">top</a> </div>

        </footer>

    </div><!-- end #wrapper -->
</div><!-- end layout-theme -->

<span class="scroll-top"> <i class="fa fa-angle-up"> </i></span>


</body>
</html>

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
