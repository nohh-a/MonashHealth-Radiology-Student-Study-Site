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

        .page-title {
            padding-top: 110px;
            padding-bottom: 20px;
        }
        .lower-box, .lower-content, .post-info{
            overflow-wrap: break-word;
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
                                <li class="current"><a href="<?= $this->Url->build('/') ?>">Case List</a>
                                </li>
                                <li class=""><a href="<?= $this->Url->build(['controller'=>'Users','action'=> 'index']) ?>">User Management</a>
                                </li>

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
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="<?= $this->Url->build('/') ?>"><span class="fab fa-twitter"></span></a></li>
                <li><a href="<?= $this->Url->build('/') ?>"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="<?= $this->Url->build('/') ?>"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="<?= $this->Url->build('/') ?>"><span class="fab fa-instagram"></span></a></li>
                <li><a href="<?= $this->Url->build('/') ?>"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->


<!--Page Title-->
<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Case List</h1>
            <ul class="bread-crumb clearfix">
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<?= $this->Flash->render() ?>

<!-- blog-grid -->
<section class="sidebar-page-container blog-grid">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h3> Sort by</h3>
                <?= $this->Form->create(null, ['type' => 'get']) ?>
                <?= $this->Form->select(
                    'sort',
                    [
                        'newest' => ' Newest',
                        'oldest' => 'Oldest',
                        'az' => 'A-Z',
                        'za' => 'Z-A',
                        'rating_asc' => 'Rating ASC',
                        'rating_desc' => 'Rating DESC'
                    ],
                    [
                        'empty' => false,
                        'default' => $this->request->getQuery('Apply'),
                        'class' => 'custom-select',
                    ]
                ) ?>
                <?= $this->Form->button(__('Apply'),['class'=>'btn btn-secondary', 'style'=>'margin-top: -20px;']) ?>
                <?= $this->Form->end() ?>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="btn">
                    <?= $this->Html->link('Create Case', ['controller' => 'moncases', 'action' => 'addnewcase'], ['class' => 'theme-btn style-one']) ?>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-grid-content">
                    <div class="row clearfix">
                        <?php if ($moncases->count() > 0) : ?>
                        <?php foreach ($moncases as $moncase) : ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'view', $moncase->id])?>"<a/>
                                    <div class="image-holder">
                                        <figure class="image-box">
                                            <img src="<?= $this->Url->image($moncase -> image_url, ['alt'=>'photo']) ?>">
                                        </figure>
                                        <div class="link"><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'view', $moncase->id])?>"><i class="fas fa-arrow-right"></i></a></div>
                                    </div>
                                    <div class="lower-content">
                                        <ul class="post-info">
                                            <li><?= h($moncase->case_type) ?></li>
                                            <li><span>by</span>&nbsp;<?= h($moncase->author) ?></li>
                                        </ul>
                                        <h3><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'view', $moncase->id])?>"><?= h($moncase->diagnosis) ?></a></h3>
                                        <p><?= h($moncase->differential_diagnosis) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>No results found.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="sidebar">
                    <div class="sidebar-widget sidebar-search">
                        <div class="widget-title">
                            <h3>Search</h3>
                        </div>
                        <div class="widget-content">
                            <?= $this->Form->create(null, ['url' => ['controller' => 'Moncases', 'action' => 'userlist'], 'type' => 'get']) ?>
                            <div class="form-group">
                                <?= $this->Form->input('search', ['type' => 'search', 'placeholder' => 'Search Diagnosis']) ?>
                                <button type="submit" class="search-button">
                                    <?= $this->Html->tag('i', '', ['class' => 'fas fa-search']) ?>
                                </button>
                            </div>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>

                    <div class="sidebar-widget sidebar-categories">
                        <div class="widget-title">
                            <h3>FILTERS</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="accordion-box">
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <h4><span>-</span> Type</h4>
                                    </div>
                                    <div class="acc-content">
                                        <?= $this->Form->create(null, ['url' => ['controller' => 'moncases', 'action' => 'userlist'], 'type' => 'get']) ?>
                                        <div class="content">
                                            <?= $this->Form->select('case_type', [
                                                'Oscer' => 'Oscer',
                                                'Long' => 'Long',
                                                'Medium' => 'Medium',
                                                'Short' => 'Short',
                                                'General' => 'General',
                                            ], [
                                                'class' => 'select select_mod-a jelect',
                                                'empty' => 'Choose Case Type',
                                            ]); ?>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <h4><span>-</span>Contributor</h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <?= $this->Form->select('contributor', [
                                                'Trainee' => 'Trainee',
                                                'Consultant' => 'Consultant',
                                                'Library' => 'Library',
                                            ], [
                                                'class' => 'select select_mod-a jelect',
                                                'empty' => 'Choose Contributor',
                                            ]); ?>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <h4><span>-</span>Rating</h4>
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <p> <?= $this->Form->select('rating', [
                                                    '1' => '1',
                                                    '2' => '2',
                                                    '3' => '3',
                                                    '4' => '4',
                                                    '5' => '5',
                                                ], [
                                                    'class' => 'form-select',
                                                    'empty' => 'Choose Rating',
                                                ]); ?>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-tags">
                        <div class="widget-title">
                            <div class="widget-content">
                                   <?= $this->Form->button(__('Apply Filter'), ['class' => 'theme-btn style-one', 'style'=>'margin-left:40px']) ?>
                                   <?= $this->Form->button(__('Reset Filter'), ['class' => 'theme-btn style-two']) ?>
                                   <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-grid end -->


<!-- cta-section -->
<section class="cta-section bg-color-2">
    <div class="pattern-box">
        <div class="pattern-1" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/shape/pattern-7.png') ?> "></div>
        <div class="pattern-2" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/shape/pattern-8.png') ?> "></div>
    </div>
</section>
<!-- cta-section end -->


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
                            <div class="widget-content">
                                <ul>
                                    <li><a href="<?= $this->Url->build('/') ?>">Company History</a></li>
                                    <li><a href="<?= $this->Url->build('/') ?>">About Us</a></li>
                                    <li><a href="<?= $this->Url->build('/') ?>">Contact Us</a></li>
                                    <li><a href="<?= $this->Url->build('/') ?>">Services</a></li>
                                    <li><a href="<?= $this->Url->build('/') ?>">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h3>Services</h3>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="<?= $this->Url->build('/') ?>">Company History</a></li>
                                    <li><a href="<?= $this->Url->build('/') ?>">About Us</a></li>
                                    <li><a href="<?= $this->Url->build('/') ?>">Contact Us</a></li>
                                    <li><a href="<?= $this->Url->build('/') ?>">Services</a></li>
                                    <li><a href="<?= $this->Url->build('/') ?>">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget contact-widget">
                            <div class="widget-title">
                                <h3>Contact Info</h3>
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li>Flat 20, Reynolds Neck, North Hele naville, FV77 8WS</li>
                                    <li><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                                </ul>
                            </div>
                            <ul class="social-links clearfix">
                                <li><a href="<?= $this->Url->build('/') ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?= $this->Url->build('/') ?>"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?= $this->Url->build('/') ?>"><i class="fab fa-vimeo-v"></i></a></li>
                                <li><a href="<?= $this->Url->build('/') ?>"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom clearfix">
            <div class="copyright pull-left">
                <p><a href="<?= $this->Url->build('/') ?>"> Monash Health</a> &copy; 2023 All Right Reserved</p>
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
