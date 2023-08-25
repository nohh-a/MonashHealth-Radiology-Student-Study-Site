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
    <title>Case Detail</title>
    <?= $this->Html->meta('icon', 'favicon.ico', ['type' => 'image/x-icon']) ?>

    <?= $this->Html->css('/assets/css/master.css') ?>
    <?= $this->Html->css('/assets/plugins/iview/css/iview.css') ?>
    <?= $this->Html->css('/assets/plugins/iview/css/skin/style.css', ['class' => 'skin']) ?>

    <style>
        .btn-skew-r__inner, .btn-skew-r {
            transform: skewX(0deg);
            border-radius: 5px;
            box-shadow: 0px 0 0 0#7d9afd;
            margin-left: 0px;
        }

        .section-bg_second, .jelect-option_state_active, .jelect-option:hover, .btn-skew-r, .car-details__price{
            background-color: #7d9afd;
        }

    </style>

    <?= $this->Html->script('/assets/plugins/jquery/jquery-1.11.1.min.js') ?>

    <style>
        .tab_words {
            word-wrap: break-word;
        }

        .block-title-second{
            background-color: #7d9afd;
        }

        .car-details__title {
            box-shadow: -4px 0 0 0 #7d9afd;
        }

        a, .color_primary, .ui-title-inner .icon:before, .link-img__link:hover .link-img__title, .main-block__title strong, .decor-3, .list-services:hover .list-services__title, .list-progress .icon, .footer-title__inner, .card__price-number, .list-categories__link:before, .list-categories__link:hover, .list-descriptions dt:before, .widget-post1__price, .nav-tabs > li.active > a, .nav-tabs > li > a:hover, .nav-tabs > li.active > a:focus, .social-blog__item:before, blockquote:before, .comments-list .comment-datetime {
            color: #7d9afd;
        }

        .ui-title-inner {
            line-height: 0px;
        }

        p, .body {
            font-weight: 100;
            font-size: 16px;
            color: #0f0f0f;
        }
    </style>

</head>


<body>


<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->

<div  id="this-top" class="layout-theme animated-css"  data-header="sticky" data-header-top="200"  >


    <div id="wrapper">

        <!-- HEADER -->
        <div class="header">
            <div class="header__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="navbar yamm">
                                <div class="navbar-header hidden-md hidden-lg hidden-sm">
                                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                    <a href="<?= $this->Url->build('/') ?>" class="navbar-brand">
                                        <img class="logo__img img-responsive" src="<?= $this->Url->image('logo.png') ?>" height="50" width="111" alt="Logo">
                                    </a>
                                </div>
                                <div id="navbar-collapse-1" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="<?= $this->Url->build(['controller'=>'Users','action'=> 'index']) ?>">User Management</a> </li>
                                        <li><?= $this->Form->postLink(__('Logout'), ['controller'=>'Auth','action'=> 'logout'], ['confirm' => __("Are you sure you want to Logout?")]) ?></li>
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
            <td><button class="btn btn-skew-r btn-effect btn-skew-r__inner" onclick="goBack()">Go Back</button></td>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
            <br><br>
            <div class="row">
                <div class="col-md-8">
                    <main class="main-content">
                        <article class="car-details">
                            <div class="car-details__wrap-title clearfix">
                                <h3 class="car-details__title"> <?= h($moncase->diagnosis) ?> </h3>
                                <div class="car-details__wrap-price">

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


                            <div class="wrap-nav-tabs">
                                <ul class="nav nav-tabs ">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Tab 1</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Tab 2</a></li>
                                    <!-- Nav tabs -->

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

                                        <h3 class="ui-title-inner">History</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->history) ?></p>

                                        <h3 class="ui-title-inner">Findings</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->findings) ?></p>

                                        <h3 class="ui-title-inner">Teaching Points</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->teaching_points) ?></p>

                                    </dvi>
                                </div>

                                <div class="tab-pane" id="tab2">
                                    <dvi class="tab_words">

                                        <h3 class="ui-title-inner">Further Investigation</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->further_investigation) ?></p>

                                        <h3 class="ui-title-inner">Management</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->management) ?></p>

                                        <h3 class="ui-title-inner">Anatomy</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->anatomy) ?></p>

                                        <h3 class="ui-title-inner">Pathology</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->pathology) ?></p>

                                        <h3 class="ui-title-inner">Safety</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->safety) ?></p>

                                        <h3 class="ui-title-inner">Intrinsic Roles</h3>
                                        <div class="decor-1"></div>
                                        <p><?= h($moncase->intrinsic_roles) ?></p>

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

                                        <dt>Specialty:</dt>
                                        <dd><?= h($moncase->speciality) ?></dd>

                                        <dt>Imaging:</dt></dt>
                                        <dd><?= h($moncase->imaging) ?></dd>

                                        <dt>Seen by:</dt></dt>
                                        <dd><?= h($moncase->seen_by) ?></dd>

                                        <dt>Tags:</dt></dt>
                                        <dd><?= h($moncase->tags) ?></dd>

                                        <dt>Date:</dt>
                                        <dd><?= h($moncase->date) ?></dd>

                                        <dt>Max Marks:</dt>
                                        <dd><?= h($moncase->max_marks) ?></dd>

                                        <dt>Contributor:</dt>
                                        <dd><?= h($moncase->contributor) ?></dd>

                                        <dt>Author:</dt>
                                        <dd><?= h($moncase->author) ?></dd>

                                        <dt>Rating:</dt>
                                        <dd><?= h($moncase->rating) ?></dd>
                                    </dvi>

                                    <td class="actions">

                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $moncase->id], ['class' => 'btn btn-warning']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $moncase->id], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete this case "{0}" ?', $moncase->diagnosis)]) ?>
                                    </td>

                                </dl>
                            </div>
                        </section>



                    </aside>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->


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


































































































