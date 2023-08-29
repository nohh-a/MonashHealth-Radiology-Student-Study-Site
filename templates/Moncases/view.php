<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */
$this->disableAutoLayout();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Case List</title>

    <!-- Fav Icon -->
    <?= $this->Html->meta('icon', '/assets/img/favicon.ico', ['type' => 'image/x-icon']); ?>

    <!-- Google Fonts -->
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap'); ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap'); ?>

    <!-- Stylesheets -->
    <?= $this->Html->css(['/detoxpack/detox/assets/css/font-awesome-all.css']) ?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['list/flaticon.css']) ?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['list/bootstrap.css']) ?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['list/jquery.fancybox.min.css']) ?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['list/animate.css']) ?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['list/imagebg.css']) ?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['list/color/theme-color.css']) ?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['list/style.css']) ?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['list/responsive.css']) ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <style>
        .radio-filter {
            display: block; /* Make each label occupy a full line */
            margin-bottom: 5px; /* Add some space between radio buttons */
        }
        .theme-btn {
            padding: 5px 20px;
        }
        .custom-select {
            width: 50%;
            margin-bottom: 20px;
        }
        .sidebar-page-container {
            padding-top: 15px;
        }
        .blog-grid {
            padding-top: 15px;
        }
        .content-box, .sec-title h2 {
            overflow-wrap: break-word;
        }

        .page-title {
            padding-top: 110px;
            padding-bottom: 20px;
        }

        .message.error {
            color: red;
            background-color: #edd4d4;
            border-color: #e6c3c3;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
        }

        .message.success {
            background: #e3fcec;
            color: #1f9d55;
            border-color: #51d88a;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
        }

        .image_show {
            max-width: 100%;
            height: auto;
        }


    </style>

</head>


<!-- page wrapper -->
<body class="boxed_wrapper ltr">

<!-- preloader -->
<div class="preloader"></div>
<!-- preloader -->



<!-- main header -->
<header class="main-header">
    <div class="outer-container">
        <div class="header-upper clearfix">
            <div class="outer-box pull-left">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="<?= $this->Url->build('/') ?>">  <?= $this->Html->image('/assets/img/logo.png', ['style' => 'width: 150px;']) ?></a></figure>
                </div>
                <div class="menu-area pull-left">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="<?= $this->Url->build('/') ?>">Case List</a>
                                </li>
                                <li class=""><a href="<?= $this->Url->build(['controller'=>'Users','action'=> 'index']) ?>">User Management</a>
                                </li>
                                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'addnewcase'])?>">Create New Case</a>


                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="menu-right-content pull-right">
                <div class="btn-box"><?= $this->Form->postLink(__('Logout'), ['controller'=>'Auth','action'=> 'logout'],
                        ['confirm' => __("Are you sure you want to Logout?")]) ?></div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <figure class="logo-box"><a href="<?= $this->Url->build('/') ?>">  <?= $this->Html->image('/assets/img/logo.png', ['style' => 'width: 150px;']) ?></a></figure>
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="<?= $this->Url->build('/') ?>"> <?= $this->Html->image('/assets/img/logo.png', ['style' => 'width: 150px;']) ?></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4> <?= $this->Form->postLink(__('Logout'), ['controller'=>'Auth','action'=> 'logout'],
                    ['confirm' => __("Are you sure you want to Logout?")]) ?></h4>
        </div>
    </nav>
</div><!-- End Mobile Menu -->


<!--Page Title-->
<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Case Details</h1>
            <ul class="bread-crumb clearfix">
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<?= $this->Flash->render() ?>
<!-- portfolio-details -->
<section class="portfolio-details sec-pad">
    <div class="auto-container">
        <div class="inner-container">

<!--                        <figure class="image-box">-->
<!--                            <a href="https://monashimaging.monashhealth.org/portal/Login.aspx" class="lightbox-image" data-fancybox="gallery">-->
<!--                                <img src="--><?php //= $this->Url->image($moncase -> image_url, ['height'=>100, 'width'=>100, 'alt'=>'photo']) ?><!--">-->
<!--                            </a>-->
<!--                        </figure>   -->

                        <figure class="image-box">
                            <a href="https://monashimaging.monashhealth.org/portal/Login.aspx" >
                                <img src="<?= $this->Url->image($moncase -> image_url, ['height'=>100, 'width'=>100, 'alt'=>'photo']) ?>">
                            </a>
                        </figure>

<!--            <figure class="image_show">-->
<!--                <a href="https://monashimaging.monashhealth.org/portal/Login.aspx">-->
<!--                    <img src="--><?php //= $this->Url->image($moncase -> image_url, ['alt'=>'photo']) ?><!--">-->
<!--                </a>-->
<!--            </figure>-->


            <section class="pricing-section bg-color-1 sec-pad">
                <div class="auto-container">
                    <div class="sec-title">
                        <p><?= h($moncase->case_type) ?></p>
                        <h2><?= h($moncase->diagnosis) ?></h2>
                    </div>
                    <div class="tabs-box">
                        <div class="upper-box clearfix">
                            <div class="text pull-left">
                                <p><?= h($moncase->differential_diagnosis) ?></p>
                            </div>
                            <div class="tab-btn-box pull-right">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">General</li>
                                    <li class="tab-btn" data-tab="#tab-2">Other</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 pricing-block">
                                        <div class="pricing-block-one">
                                            <div class="pricing-table">
                                                <section class="sidebar-page-container" style="padding: 0px 0px 0px 0px;">
                                                <div class="sidebar" style="margin-left: 0px;">
                                                <div class="table-header">
                                                    <div class="sidebar-widget sidebar-tags">
                                                        <div class="widget-title">
                                                            <h3>Case Data</h3>
                                                            <div class="widget-content">
                                                                <ul class="clearfix">
                                                                    <li><a><h5>Accession No: </h5> <?= h($moncase->accession_no) ?></a></li>
                                                                    <li><a><h5>Specialty: </h5> <?= h($moncase->speciality) ?></a></li>
                                                                    <li><a><h5>Seen By: </h5> <?= h($moncase->seen_by) ?></a></li>
                                                                    <li><a><h5>Tags: </h5> <?= h($moncase->tags) ?></a></li>
                                                                    <li><a><h5>Date: </h5> <?= h($moncase->date) ?></a></li>
                                                                    <li><a><h5>Marks: </h5> <?= h($moncase->max_marks) ?></a></li>
                                                                    <li><a><h5>Contributor: </h5> <?= h($moncase->contributor) ?></a></li>
                                                                    <li><a><h5>Author: </h5> <?= h($moncase->author) ?></a></li>
                                                                    <li><a><h5>Case Rating: </h5><?= h($moncase->rating) ?></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                </section>
                                                <div class="table-content">
                                                    <ul>
                                                        <h3>History </h3>
                                                        <li><?= h($moncase->history) ?></li>
                                                        <h3>Findings </h3>
                                                        <li><?= h($moncase->findings) ?></li>
                                                        <h3>Imaging</h3>
                                                        <li><?= h($moncase->imaging) ?></li>
                                                        <h3>Teaching Points</h3>
                                                        <li><?= h($moncase->teaching_points) ?></li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <?= $this->Html->link(__('Edit Details'), ['action' => 'edit', $moncase->id], ['class' => 'theme-btn style-two']) ?>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $moncase->id], ['class' => 'theme-btn style-two', 'confirm' => __('Are you sure you want to delete # {0}?', $moncase->diagnosis)]) ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab" id="tab-2">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 pricing-block">
                                        <div class="pricing-block-one">
                                            <div class="pricing-table">
                                                <section class="sidebar-page-container" style="padding: 0px 0px 0px 0px;">
                                                    <div class="sidebar" style="margin-left: 0px;">
                                                        <div class="table-header">
                                                            <div class="sidebar-widget sidebar-tags">
                                                                <div class="widget-title">
                                                                    <h3>Case Data</h3>
                                                                    <div class="widget-content">
                                                                        <ul class="clearfix">
                                                                            <li><a><h5>Accession No: </h5> <?= h($moncase->accession_no) ?></a></li>
                                                                            <li><a><h5>Specialty: </h5> <?= h($moncase->speciality) ?></a></li>
                                                                            <li><a><h5>Seen By: </h5> <?= h($moncase->seen_by) ?></a></li>
                                                                            <li><a><h5>Tags: </h5> <?= h($moncase->tags) ?></a></li>
                                                                            <li><a><h5>Date: </h5> <?= h($moncase->date) ?></a></li>
                                                                            <li><a><h5>Marks: </h5> <?= h($moncase->max_marks) ?></a></li>
                                                                            <li><a><h5>Contributor: </h5> <?= h($moncase->contributor) ?></a></li>
                                                                            <li><a><h5>Author: </h5> <?= h($moncase->author) ?></a></li>
                                                                            <li><a><h5>Case Rating:</h5><?= h($moncase->rating) ?></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="table-content">
                                                    <ul>
                                                        <h3>Further Investigation </h3>
                                                        <li><?= h($moncase->further_investigation)?></li>
                                                        <h3>Management</h3>
                                                        <li><?= h($moncase->management) ?></li>
                                                        <h3>Anatomy</h3>
                                                        <li><?= h($moncase->anatomy) ?></li>
                                                        <h3>Pathology</h3>
                                                        <li><?= h($moncase->pathology) ?></li>
                                                        <h3>Safety</h3>
                                                        <li><?= h($moncase->safety) ?></li>
                                                        <h3>Intrinsic Roles</h3>
                                                        <li><?= h($moncase->intrisic_roles) ?></li>

                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <?= $this->Html->link(__('Edit Details'), ['action' => 'edit', $moncase->id], ['class' => 'theme-btn style-two']) ?>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $moncase->id], ['class' => 'theme-btn style-two', 'confirm' => __('Are you sure you want to delete # {0}?', $moncase->diagnosis)]) ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

<!-- main-footer -->
  <footer class="main-footer">
            <div class="auto-container">
                <div class="footer-top">
                    <div class="widget-section wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget logo-widget">
                                    <figure class="footer-logo"><a href="<?= $this->Url->build('/') ?>"> <?= $this->Html->image('/assets/img/logo.png', ['style' => 'width: 150px;']) ?></a></figure>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>Quick Link</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>Services</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget contact-widget">
                                    <div class="widget-title">
                                        <h3>Contact Info</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom clearfix">
                    <div class="copyright pull-left">
                        <p><a href="<?= $this->Url->build('/') ?>">Monash Health</a> &copy; 2023 All Right Reserved</p>
                    </div>
                    <ul class="footer-nav pull-right">
                        <li><a href="<?= $this->Url->build('/') ?>">Terms of Service</a></li>
                        <li><a href="<?= $this->Url->build('/') ?>">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </footer>
<!-- main-footer end -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>


        <!-- jequery plugins -->
        <?= $this->Html->script(['list/jquery.js']) ?>

        <?= $this->Html->script(['list/popper.min.js']) ?>

        <?= $this->Html->script(['list/bootstrap.min.js']) ?>

        <?= $this->Html->script(['list/wow.js']) ?>

        <?= $this->Html->script(['list/validation.js']) ?>

        <?= $this->Html->script(['list/jquery.fancybox.js']) ?>

        <?= $this->Html->script(['list/appear.js']) ?>

        <?= $this->Html->script(['list/scrollbar.js']) ?>

        <?= $this->Html->script(['list/tilt.jquery.js']) ?>

        <?= $this->Html->script(['list/script.js']) ?>


</body><!-- End of .page_wrapper -->
</html>
