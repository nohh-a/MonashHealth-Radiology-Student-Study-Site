<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */

$this->disableAutoLayout();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <title>Case Detail by Not Admin</title>
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

    <style>
        .tab_words {
            word-wrap: break-word;
        }

        .block-title-second {
            background-color: #7d9afd;
        }
    </style>

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
                            <a href="<?= $this->Url->build(['controller' => 'moncases','action' => 'userlistNotadmin']) ?>" class="logo">
                                <img class="logo__img img-responsive" src="<?= $this->Url->image('logo.png') ?>" height="50" width="111" alt="Logo">
                            </a>
                            <div class="navbar yamm">
                                <div class="navbar-header hidden-md hidden-lg hidden-sm">
                                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                    <a href="javascript:void(0);" class="navbar-brand"></a> </div>
                                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="<?= $this->Url->build(['controller' => 'moncases','action' => 'userlistNotadmin']) ?>">HOME</a></li>


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
            <div class="block-title__inner section-bg section-bg_second  block-title-second">

                <h1 class="ui-title-page">Case Details</h1>

            </div><!-- end block-title__inner -->
        </div><!-- end block-title -->

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <main class="main-content">
                        <article class="car-details">
                            <div class="car-details__wrap-title clearfix">
                                <h2 class="car-details__title">Diagnosis</h2>
                                <div class="car-details__wrap-price">
                                    <span class="car-details__price">
                                        <span class="car-details__price-inner">
                                            <?= h($moncase->diagnosis) ?>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div id="slider-product" class="flexslider slider-product">
                                <ul class="slides">
                                    <li>
                                        <a href="<?php echo $this->Url->image($moncase->image_url) ?>">
                                            <img class="img-responsive" src="<?php echo $this->Url->image($moncase->image_url) ?>" height="430" width="770" alt="Image">
                                        </a>
                                    </li>
                                </ul>
                            </div>


                            <!-- Nav tabs -->
                            <div class="wrap-nav-tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">overviwe ?</a></li>
                                    <li><a href="#tab2" data-toggle="tab">observations ?</a></li>
                                    <li><a href="#tab3" data-toggle="tab">teaching points ?</a></li>
                                </ul>
                            </div>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab1">
                                    <dvi class="tab_words">
                                        <h3 class="ui-title-inner">Diagnosis</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->diagnosis) ?></p>

                                        <h3 class="ui-title-inner">Differential Diagnosis</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->differential_diagnosis) ?></p>

                                        <h3 class="ui-title-inner">Pathology</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->pathology) ?></p>

                                        <h3 class="ui-title-inner">Imaging findings</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->findings) ?></p>

                                        <h3 class="ui-title-inner">Teaching Points</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->teaching_points) ?></p>
                                    </dvi>
                                </div>

                                <div class="tab-pane" id="tab2">
                                    <dvi class="tab_words">
                                        <h3 class="ui-title-inner">Safety</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->safety) ?></p>

                                        <h3 class="ui-title-inner">Intrinsic Roles</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->intrinsic_roles) ?></p>

                                        <h3 class="ui-title-inner">Pathology</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->pathology) ?></p>
                                    </dvi>
                                </div>

                                <div class="tab-pane" id="tab3">
                                    <dvi class="tab_words">
                                        <h3 class="ui-title-inner">Everything else ?</h3>
                                        <div class="decor-1"></div>
                                    </dvi>
                                </div>

                            </div>


                        </article>

                    </main><!-- end main-content -->
                </div><!-- end col -->


                <div class="col-md-4">
                    <aside class="sidebar">
                        <section class="widget">
                            <h3 class="widget-title">Case Details</h3>
                            <div class="decor-1"></div>
                            <div class="widget-content">
                                <dl class="list-descriptions list-unstyled">

                                    <dvi class="tab_words">
                                        <dt>Accession No:</dt>
                                        <dd><?= h($moncase->accession_no) ?></dd>

                                        <dt>Case Type:</dt>
                                        <dd><?= h($moncase->case_type) ?></dd>

                                        <dt>Consultant:(not sure)</dt>
                                        <dd><?= h($moncase->accession_no) ?></dd>

                                        <dt>Marks:</dt>
                                        <dd><?= h($moncase->max_marks) ?></dd>

                                        <dt>Date:</dt>
                                        <dd><?= h($moncase->date) ?></dd>
                                        <dt>Author:</dt>
                                        <dd><?= h($moncase->author) ?></dd>
                                    </dvi>

                                    <td class="actions">
                                    <td><button class="btn btn-primary" onclick="goBack()">Go Back</button></td>
                                    <script>
                                        function goBack() {
                                            window.history.back();
                                        }
                                    </script>
                                    <br><br>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $moncase->id], ['class' => 'btn btn-warning']) ?>

                                    </td>

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
