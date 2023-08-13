<?php
$this->disableAutoLayout();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <title>Case Gallery</title>
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


<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->


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
                                        <li><a href="<?= $this->Url->build('/') ?>">HOME</a></li>
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

                <h1 class="ui-title-page">case gallery</h1>

            </div><!-- end block-title__inner -->
        </div><!-- end block-title -->

        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <main class="main-content">

                        <div class="wrap-post">

                            <article class="post post_mod-c clearfix">
                                <div class="entry-media">
                                    <img class="img-responsive" src="<?= $this->Url->image('/media/posts/370x250/1.jpg', ['width' => 370, 'height' => 250, 'alt' => 'Foto']) ?>" />
                                    <div class="post-hover"></div>
                                </div>

                                <div class="entry-main entry-main_mod-a">
                                    <div class="entry-main__inner">
                                        <h3 class="entry-title"><a href="javascript:void(0);">sed rt enim ad minim veniam quis</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">By:: <a class="entry-meta__link" href="javascript:void(0);"> ALEX LEEMAN</a></span>
                                            <span class="entry-meta__item">COMMENTS :: <a class="entry-meta__link" href="javascript:void(0);">15</a></span>
                                        </div>
                                    </div>
                                    <div class="decor-1"></div>
                                    <div class="entry-date"><span class="entry-date__inner"><span class="entry-date__number">01</span><br>oct</span></div>
                                    <div class="entry-content">
                                        <p>Wliquam sit amet urna sed vel nullam semper aib vestiblum fringilla orem ipsum dolor sit amet con tetur adipiscing elit sed eiusmod.</p>
                                    </div>
                                    <a class="post-link" href="javascript:void(0);">read more</a>
                                </div>
                            </article>

                            <article class="post post_mod-c clearfix">
                                <div class="entry-media">
                                    <img class="img-responsive" src="<?= $this->Url->image('/media/posts/370x250/2.jpg', ['width' => 370, 'height' => 250, 'alt' => 'Foto']) ?>" />
                                    <div class="post-hover"></div>
                                </div>

                                <div class="entry-main entry-main_mod-a">
                                    <div class="entry-main__inner">
                                        <h3 class="entry-title"><a href="javascript:void(0);">enim ad minim veniam quis nos used</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">By:: <a class="entry-meta__link" href="javascript:void(0);"> ALEX LEEMAN</a></span>
                                            <span class="entry-meta__item">COMMENTS :: <a class="entry-meta__link" href="javascript:void(0);">15</a></span>
                                        </div>
                                    </div>
                                    <div class="decor-1"></div>
                                    <div class="entry-date"><span class="entry-date__inner"><span class="entry-date__number">30</span><br>sep</span></div>
                                    <div class="entry-content">
                                        <p>Wliquam sit amet urna sed vel nullam semper aib vestiblum fringilla orem ipsum dolor sit amet con tetur adipiscing elit sed eiusmod.</p>
                                    </div>
                                    <a class="post-link" href="javascript:void(0);">read more</a>
                                </div>
                            </article>

                            <article class="post post_mod-c clearfix">
                                <div class="entry-media">
                                    <img class="img-responsive" src="<?= $this->Url->image('/media/posts/370x250/3.jpg', ['width' => 370, 'height' => 250, 'alt' => 'Foto']) ?>" />
                                    <div class="post-hover"></div>
                                </div>

                                <div class="entry-main entry-main_mod-a">
                                    <div class="entry-main__inner">
                                        <h3 class="entry-title"><a href="javascript:void(0);">Sed nostrud exercitation ipsum</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">By:: <a class="entry-meta__link" href="javascript:void(0);"> ALEX LEEMAN</a></span>
                                            <span class="entry-meta__item">COMMENTS :: <a class="entry-meta__link" href="javascript:void(0);">15</a></span>
                                        </div>
                                    </div>
                                    <div class="decor-1"></div>
                                    <div class="entry-date"><span class="entry-date__inner"><span class="entry-date__number">28</span><br>sep</span></div>
                                    <div class="entry-content">
                                        <p>Wliquam sit amet urna sed vel nullam semper aib vestiblum fringilla orem ipsum dolor sit amet con tetur adipiscing elit sed eiusmod.</p>
                                    </div>
                                    <a class="post-link" href="javascript:void(0);">read more</a>
                                </div>
                            </article>

                            <article class="post post_mod-c clearfix">
                                <div class="entry-media">
                                    <img class="img-responsive" src="<?= $this->Url->image('/media/posts/370x250/4.jpg', ['width' => 370, 'height' => 250, 'alt' => 'Foto']) ?>" />
                                    <div class="post-hover"></div>
                                </div>

                                <div class="entry-main entry-main_mod-a">
                                    <div class="entry-main__inner">
                                        <h3 class="entry-title"><a href="javascript:void(0);">sed rt enim ad minim veniam quis</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">By:: <a class="entry-meta__link" href="javascript:void(0);"> ALEX LEEMAN</a></span>
                                            <span class="entry-meta__item">COMMENTS :: <a class="entry-meta__link" href="javascript:void(0);">15</a></span>
                                        </div>
                                    </div>
                                    <div class="decor-1"></div>
                                    <div class="entry-date"><span class="entry-date__inner"><span class="entry-date__number">27</span><br>sep</span></div>
                                    <div class="entry-content">
                                        <p>Wliquam sit amet urna sed vel nullam semper aib vestiblum fringilla orem ipsum dolor sit amet con tetur adipiscing elit sed eiusmod.</p>
                                    </div>
                                    <a class="post-link" href="javascript:void(0);">read more</a>
                                </div>
                            </article>

                            <article class="post post_mod-c clearfix">
                                <div class="entry-media">
                                    <img class="img-responsive" src="<?= $this->Url->image('/media/posts/370x250/5.jpg', ['width' => 370, 'height' => 250, 'alt' => 'Foto']) ?>" />
                                    <div class="post-hover"></div>
                                </div>

                                <div class="entry-main entry-main_mod-a">
                                    <div class="entry-main__inner">
                                        <h3 class="entry-title"><a href="javascript:void(0);">sed rt enim ad minim veniam quis</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">By:: <a class="entry-meta__link" href="javascript:void(0);"> ALEX LEEMAN</a></span>
                                            <span class="entry-meta__item">COMMENTS :: <a class="entry-meta__link" href="javascript:void(0);">15</a></span>
                                        </div>
                                    </div>
                                    <div class="decor-1"></div>
                                    <div class="entry-date"><span class="entry-date__inner"><span class="entry-date__number">26</span><br>sep</span></div>
                                    <div class="entry-content">
                                        <p>Wliquam sit amet urna sed vel nullam semper aib vestiblum fringilla orem ipsum dolor sit amet con tetur adipiscing elit sed eiusmod.</p>
                                    </div>
                                    <a class="post-link" href="javascript:void(0);">read more</a>
                                </div>
                            </article>

                            <article class="post post_mod-c clearfix">
                                <div class="entry-media">
                                    <img class="img-responsive" src="<?= $this->Url->image('/media/posts/370x250/6.jpg', ['width' => 370, 'height' => 250, 'alt' => 'Foto']) ?>" />
                                    <div class="post-hover"></div>
                                </div>

                                <div class="entry-main entry-main_mod-a">
                                    <div class="entry-main__inner">
                                        <h3 class="entry-title"><a href="javascript:void(0);">sed rt enim ad minim veniam quis</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">By:: <a class="entry-meta__link" href="javascript:void(0);"> ALEX LEEMAN</a></span>
                                            <span class="entry-meta__item">COMMENTS :: <a class="entry-meta__link" href="javascript:void(0);">15</a></span>
                                        </div>
                                    </div>
                                    <div class="decor-1"></div>
                                    <div class="entry-date"><span class="entry-date__inner"><span class="entry-date__number">25</span><br>sep</span></div>
                                    <div class="entry-content">
                                        <p>Wliquam sit amet urna sed vel nullam semper aib vestiblum fringilla orem ipsum dolor sit amet con tetur adipiscing elit sed eiusmod.</p>
                                    </div>
                                    <a class="post-link" href="javascript:void(0);">read more</a>
                                </div>
                            </article>

                            <article class="post post_mod-c clearfix">
                                <div class="entry-media">
                                    <img class="img-responsive" src="<?= $this->Url->image('/media/posts/370x250/7.jpg', ['width' => 370, 'height' => 250, 'alt' => 'Foto']) ?>" />
                                    <div class="post-hover"></div>
                                </div>

                                <div class="entry-main entry-main_mod-a">
                                    <div class="entry-main__inner">
                                        <h3 class="entry-title"><a href="javascript:void(0);">sed rt enim ad minim veniam quis</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">By:: <a class="entry-meta__link" href="javascript:void(0);"> ALEX LEEMAN</a></span>
                                            <span class="entry-meta__item">COMMENTS :: <a class="entry-meta__link" href="javascript:void(0);">15</a></span>
                                        </div>
                                    </div>
                                    <div class="decor-1"></div>
                                    <div class="entry-date"><span class="entry-date__inner"><span class="entry-date__number">24</span><br>sep</span></div>
                                    <div class="entry-content">
                                        <p>Wliquam sit amet urna sed vel nullam semper aib vestiblum fringilla orem ipsum dolor sit amet con tetur adipiscing elit sed eiusmod.</p>
                                    </div>
                                    <a class="post-link" href="javascript:void(0);">read more</a>
                                </div>
                            </article>

                            <article class="post post_mod-c clearfix">
                                <div class="entry-media">
                                    <img class="img-responsive" src="<?= $this->Url->image('/media/posts/370x250/8.jpg', ['width' => 370, 'height' => 250, 'alt' => 'Foto']) ?>" />
                                    <div class="post-hover"></div>
                                </div>

                                <div class="entry-main entry-main_mod-a">
                                    <div class="entry-main__inner">
                                        <h3 class="entry-title"><a href="javascript:void(0);">sed rt enim ad minim veniam quis</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">By:: <a class="entry-meta__link" href="javascript:void(0);"> ALEX LEEMAN</a></span>
                                            <span class="entry-meta__item">COMMENTS :: <a class="entry-meta__link" href="javascript:void(0);">15</a></span>
                                        </div>
                                    </div>
                                    <div class="decor-1"></div>
                                    <div class="entry-date"><span class="entry-date__inner"><span class="entry-date__number">23</span><br>sep</span></div>
                                    <div class="entry-content">
                                        <p>Wliquam sit amet urna sed vel nullam semper aib vestiblum fringilla orem ipsum dolor sit amet con tetur adipiscing elit sed eiusmod.</p>
                                    </div>
                                    <a class="post-link" href="javascript:void(0);">read more</a>
                                </div>
                            </article>

                            <article class="post post_mod-c clearfix">
                                <div class="entry-media">
                                    <img class="img-responsive" src="<?= $this->Url->image('/media/posts/370x250/9.jpg', ['width' => 370, 'height' => 250, 'alt' => 'Foto']) ?>" />
                                    <div class="post-hover"></div>
                                </div>

                                <div class="entry-main entry-main_mod-a">
                                    <div class="entry-main__inner">
                                        <h3 class="entry-title"><a href="javascript:void(0);">sed rt enim ad minim veniam quis</a></h3>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">By:: <a class="entry-meta__link" href="javascript:void(0);"> ALEX LEEMAN</a></span>
                                            <span class="entry-meta__item">COMMENTS :: <a class="entry-meta__link" href="javascript:void(0);">15</a></span>
                                        </div>
                                    </div>
                                    <div class="decor-1"></div>
                                    <div class="entry-date"><span class="entry-date__inner"><span class="entry-date__number">22</span><br>sep</span></div>
                                    <div class="entry-content">
                                        <p>Wliquam sit amet urna sed vel nullam semper aib vestiblum fringilla orem ipsum dolor sit amet con tetur adipiscing elit sed eiusmod.</p>
                                    </div>
                                    <a class="post-link" href="javascript:void(0);">read more</a>
                                </div>
                            </article>

                        </div><!-- end wrap-post -->

                        <div class="text-center"><a class="btn btn-success btn-effect" href="javascript:void(0);"><span class="btn-inner">READ BLOG</span></a></div>


                    </main><!-- end main-content -->
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




