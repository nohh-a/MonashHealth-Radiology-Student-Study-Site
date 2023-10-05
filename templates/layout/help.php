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
 * @var iterable<\App\Model\Entity\Moncase> $moncases
 * @var int $oscerCount
 * @var int $longCount
 * @var int $mediumCount
 * @var int $shortCount
 * @var int $generalCount
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Monash Health: Help</title>

    <!-- Fav Icon -->
    <?= $this->Html->meta('icon') ?>
    <!-- Google Fonts -->
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap'); ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap'); ?>

    <!-- Stylesheets -->
    <?= $this->Html->css(['/detoxpack/detox/assets/css/font-awesome-all.css']) ?>
    <?= $this->Html->css(['https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css']) ?>

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

    <?= $this->Html->css('/webroot/css/valid-msg.css') ?>
    <?= $this->Html->css('/webroot/css/collection.css') ?>
    <?= $this->Html->css('/webroot/css/star.css') ?>



    <style>
        /* ALL: add padding to the button */
        .theme-btn {
            padding: 5px 20px;
        }

        /* User list: adjust size of dropdown lists*/
        .custom-select {
            width: 40%;
            margin-bottom: 20px;
        }

        /* USER LIST: add padding to sides of pages*/
        .sidebar-page-container {
            padding-top: 15px;
        }

        /* USER LIST: add padding to main content page*/
        .blog-grid {
            padding-top: 15px;
            padding-bottom: 30px;
        }

        /* ALL: adjust footer*/
        .footer-bottom {
            border-top: 1px solid #e6eaf1;
        }

        /* ALL: adjust size of blue bar above footer*/
        .cta-section {
            padding-top: 35px;
            padding-bottom: 10px;
        }

        /* ALL: add padding to page title*/
        .page-title {
            padding-top: 170px;
            padding-bottom: 20px;
        }

        /* USER LIST: adjust how text views in grid view */
        .lower-box, .lower-content, .post-info{
            overflow-wrap: break-word;
        }

        /* ALL: style error message */
        .message.error {
            color: red;
            background-color: #edd4d4;
            border-color: #e6c3c3;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
        }

        /* ALL: style success message */
        .message.success {
            background: #e3fcec;
            color: #1f9d55;
            border-color: #51d88a;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
        }

        /* USER LIST: hide side bar and show filter button in mobile view */
        @media (max-width:991px) {
            .modal-hide {
                display:block;
            }

            .sidebar-hide {
                display: none;
            }

        }

        /* USER LIST: hide filter button in desktop view and show sidebar */
        @media (min-width: 992px) {
            .modal-hide {
                display: none;
            }

            .sidebar-hide {
                display: block;
            }
        }

    </style>

</head>

<!-- page wrapper -->
<body class="boxed_wrapper ltr">

<!-- preloader -->
<div class="preloader"> </div>
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
                                <li class="">
                                    <a href="<?= $this->Url->build('/') ?>">Case List</a>
                                </li>

                                <li class="">
                                    <a href="<?= $this->Url->build(['controller' => 'Users','action' => 'index']) ?>">User Management</a>
                                </li>
                                <li>
                                    <a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'archivedcases'])?>">Archived Cases</a>
                                </li>

                                <li>
                                    <a href="<?= $this->Url->build(['controller' => 'collections', 'action' => 'index'])?>">My Favorites</a>
                                </li>

                                <li>
                                    <a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'index'])?>">Help</a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="menu-right-content pull-right">
                <div class="btn-box"><?= $this->Form->postLink(
                        __($username),
                        ['controller' => 'Auth','action' => 'logout'],
                        ['confirm' => __("Username: {0}\nAuthor: {1}\nAre you sure you want to Logout?", $username, $author)]) ?>
                </div>
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
            <h4> <?= $this->Form->postLink(
                    __($username),
                    ['controller' => 'Auth','action' => 'logout'],
                    ['confirm' => __("Username: {0}\nAuthor: {1}\nAre you sure you want to Logout?", $username, $author)])
                ?>
            </h4>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->


<!-- Main body Here-->
<?= $this->fetch('content') ?>



<!-- main-footer -->
<footer class="main-footer">
    <!-- cta-section -->
    <section class="cta-section bg-color-2" style="margin-top:40px;">
        <div class="pattern-box">
            <div class="pattern-1" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/shape/pattern-7.png') ?> "></div>
        </div>
    </section>
    <!-- cta-section end -->
    <div class="container">
        <div class="footer-bottom clearfix">
            <div class="copyright pull-left">
                <p><a href="<?= $this->Url->build('/') ?>"> Monash Health</a> &copy; 2023 All Right Reserved</p>
            </div>
            <ul class="footer-nav pull-right">
                <li><a href="<?= $this->Url->build('/') ?>">Team 53</a></li>
                <li><a href="<?= $this->Url->build('/') ?>">Monash IE</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- main-footer end -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>

<!-- jquery plugins -->
<?= $this->Html->script(['list/jquery.js']) ?>

<?= $this->Html->script(['list/popper.min.js']) ?>

<?= $this->Html->script(['list/bootstrap.min.js']) ?>

<?= $this->Html->script(['list/wow.js']) ?>

<?= $this->Html->script(['list/validation.js']) ?>

<?= $this->Html->script(['list/jquery.fancybox.js']) ?>

<?= $this->Html->script(['list/appear.js']) ?>

<?= $this->Html->script(['list/scrollbar.js']) ?>

<?= $this->Html->script(['list/tilt.jquery.js']) ?>

<script src="https://kit.fontawesome.com/190c98c6ba.js" crossorigin="anonymous"></script>

<?= $this->Html->script(['list/script.js']) ?>

</body><!-- End of .page_wrapper -->
</html>
