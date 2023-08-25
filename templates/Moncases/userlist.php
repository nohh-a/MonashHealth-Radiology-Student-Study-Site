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
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <title>Case List</title>

    <?= $this->Html->meta('icon', 'favicon.ico', ['type' => 'image/x-icon']) ?>
    <?= $this->Html->css('/assets/css/master.css') ?>


    <style>
        .section-bg_second, .jelect-option_state_active, .jelect-option:hover, .btn-skew-r{
            background-color: #7d9afd;
        }
        .a, .card__description, .a:hover {
            color: #365eec;
        }
        .card-list__info, .card__title, .card__description {
            overflow-wrap: break-word; /* Alternative for better browser support */
        }
        .card-list__row, .card__description {
            font-size: 14px;
        }
        .btn-skew-r__inner, .btn-skew-r {
            transform: skewX(0deg);
            border-radius: 5px;
            box-shadow: 0px 0 0 0#7d9afd;
        }

        a, .color_primary, .ui-title-inner .icon:before, .link-img__link:hover .link-img__title, .main-block__title strong, .decor-3, .list-services:hover .list-services__title, .list-progress .icon, .footer-title__inner, .card__price-number, .list-categories__link:before, .list-categories__link:hover, .list-descriptions dt:before, .widget-post1__price, .nav-tabs > li.active > a, .nav-tabs > li > a:hover, .nav-tabs > li.active > a:focus, .social-blog__item:before, blockquote:before, .comments-list .comment-datetime {
            color: #7d9afd;
        }
        .panel-group .panel {
            padding-left: 0px;
        }

    </style>


    <?= $this->Html->script('/assets/plugins/jquery/jquery-1.11.1.min.js') ?>

</head>

<body>

<!-- Loader -->
<div id="page-preloader"><span class="spinner"></span></div>
<!-- Loader end -->

<div  id="this-top" class="layout-theme animated-css"  data-header="sticky" data-header-top="200"  >




    <div id="wrapper">
        <div class = "header">
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
            <div class="block-title__inner section-bg_second">
                <h1 class="ui-title-page">Cases List</h1>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <main class="main-content">
                        <div class="sorting">
                            <div class="sorting__inner">
                                <div class ="sorting__item">
                                    <div class = "form-search__input">
                                        <?= $this->Form->create(null, ['url' => ['controller' => 'Moncases', 'action' => 'userlist'], 'type' => 'get']) ?>
                                        <?= $this->Form->text('search', ['placeholder' => 'Search Diagnosis']) ?>
                                        <?= $this->Form->button(__('Search')) ?>
                                        <?= $this->Form->end() ?>
                                    </div>
                                </div>
                                <div class="sorting__item">
                                    <span class="sorting__title">Sort by</span>
                                    <div  class="select jelect">
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
                                                'default' => $this -> request -> getQuery('sort'),
                                                'class' => 'select jelect',
                                            ]
                                        ) ?>
                                        <?= $this->Form->button(__('Apply')) ?>
                                        <?= $this->Form->end() ?>
                                    </div>
                                </div>
                                <div class ="sorting__item">
                                    <div class = "btn">
                                        <?= $this->Html->link('Create Case', ['controller' => 'moncases','action' => 'add'], ['class' => 'btn-skew-r btn-effect btn-skew-r__inner'])?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end sorting -->
                        <?php if ($moncases->count() > 0) : ?>
                            <?php foreach ($moncases as $moncase) : ?>
                                <article class="card clearfix">
                                    <a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'view', $moncase->id])?>">
                                        <div class="card__img">
                                            <img class="img-responsive" src=<?php echo $this->Url->image($moncase -> image_url) ?> height="196" width="235" alt="foto">
                                        </div>
                                        <div class="card__inner">
                                            <h2 class="card__title ui-title-inner"><?= h($moncase->diagnosis) ?></h2>
                                            <div class="decor-1"></div>
                                            <div class="card__description">
                                                <?= h($moncase->differential_diagnosis) ?>
                                            </div>
                                            <p></p>
                                            <ul class="card__list list-unstyled">
                                                <li class="card-list__row">
                                                    <span class="card-list__title">Findings:</span>
                                                    <span class="card-list__info"><?= h($moncase->findings) ?></span>
                                                </li>
                                                <li class="card-list__row">
                                                    <span class="card-list__title">Teaching Points:</span>
                                                    <span class="card-list__info"><?= h($moncase->teaching_points) ?></span>
                                                </li>
                                            </ul>
                                            <a/>
                                </article>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>No results found.</p>
                        <?php endif; ?>
                    </main><!-- end main-content -->
                </div><!-- end col -->

                <div class="col-md-3">
                    <aside class="sidebar">
                        <!-- FILTER CASE TYPE-->
                        <?= $this->Form->create(null, ['url' => ['controller' => 'moncases', 'action' => 'userlist'], 'type' => 'get']) ?>
                        <div class="panel-group accordion" id="accordion-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1"><i class="icon"></i></a>
                                    <h3 class="panel-title">Case Type</h3>
                                </div>
                                <div id="collapse-1" class="panel-collapse collapse in">
                                    <div class="panel-body">
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
                            </div><!-- end panel -->

                            <div class="panel-group accordion" id="accordion-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-2" href="#collapse-2"><i class="icon"></i></a>
                                        <h3 class="panel-title">Contributor</h3>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse in">
                                        <div class="panel-body">
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
                                </div><!-- end panel -->

                                <div class="panel-group accordion" id="accordion-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-3" href="#collapse-3"><i class="icon"></i></a>
                                            <h3 class="panel-title">Rating</h3>
                                        </div>
                                        <div id="collapse-3" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <?= $this->Form->select('rating', [
                                                    '1' => '1',
                                                    '2' => '2',
                                                    '3' => '3',
                                                    '4' => '4',
                                                    '5' => '5',
                                                ], [
                                                    'class' => 'select select_mod-a jelect',
                                                    'empty' => 'Choose Rating',
                                                ]); ?>                                    </div>
                                        </div>
                                    </div><!-- end panel -->

                                    <!-- <section class="widget widget_mod-a">
                                    <h3 class="widget-title">Imaging</h3>
                                    <div class="decor-1"></div>
                                    <div class="widget-content">
                                        <?= $this->Form->select('Imaging', [
                                        'Test' => 'Test',
                                    ], [
                                        'class' => 'select select_mod-a jelect',
                                        'empty' => 'Choose Imaging',
                                    ]); ?>
                                    </div>
                                </section>
                                -->
                                    <div class="widget-content">
                                        <div class="btn">
                                            <div class="btn-filter btn-skew-r js-filter" style ="padding: 0px 10px 0px;">
                                                <?= $this->Form->button(__('Filter'), ['class' => 'btn-skew-r btn-effect', 'style' => 'margin-left: -20px;']) ?>
                                                <?= $this->Form->end() ?>
                                            </div>
                                        </div>
                                    </div>
                    </aside>
                </div><!-- end wrap-filter -->
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

<?= $this->Html->script('/assets/js/custom.js'); ?>

<!-- Bootstrap core JavaScript-->
<?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>
<!-- Core plugin JavaScript-->
<?= $this->Html->script('/vendor/jquery-easing/jquery.easing.min.js') ?>
<!-- Custom scripts for all pages-->
<?= $this->Html->script('/js/sb-admin-2.min.js') ?>
<?= $this->fetch('script') ?>
