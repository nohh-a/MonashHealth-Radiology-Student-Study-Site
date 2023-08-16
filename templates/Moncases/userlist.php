
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
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

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
    <?= $this->Html->css('/assets/plugins/iview/css/iview.css') ?>
    <?= $this->Html->css('/assets/plugins/iview/css/skin/style.css', ['class' => 'skin']) ?>

    <style>
        .section-bg_second {
            background-color: #7d9afd;
        }
        .jelect-option_state_active, .jelect-option:hover {
            background-color: #7d9afd;
        }
        .btn-skew-r {
            background-color: #7d9afd;
        }
        .a, .li.active, a:focus, a:hover {
            background-color: #bacdff;
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

        <div class="block-title" style="position: ; color:">
            <div class="block-title__inner section-bg_second">

                <h1 class="ui-title-page">Cases</h1>

            </div><!-- end block-title__inner -->
        </div><!-- end block-title -->

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <main class="main-content">
                        <div class="sorting">
                            <div class="sorting__inner">
                                <div class ="sorting__item">
                                <?= $this->Form->create(null, ['url' => ['controller' => 'moncases', 'action' => 'userlist'], 'type' => 'get']) ?>
                                <?= $this->Form->text('search', ['placeholder' => 'Search Name']) ?>
                                <?= $this->Form->button(__('Search')) ?>
                                <?= $this->Form->button(__('Reset'), ['type' => 'search', 'class' => 'reset-button']) ?>
                                <?= $this->Form->end() ?>
                                </div>
                                <div class="sorting__item">
                                    <span class="sorting__title">Sort by</span>
                                    <div  class="select jelect">
                                        <input id="sort" name="sort" value="0" data-text="imagemin" type="text" class="jelect-input">
                                        <div tabindex="0" role="button" class="jelect-current">Last Added</div>
                                        <ul class="jelect-options">
                                            <li  class="jelect-option jelect-option_state_active">Last Added</li>
                                            <li  class="jelect-option">First Added</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class ="sorting__item">
                                    <a <?= $this->Html->link('Create Case', ['controller' => 'moncases','action' => 'add'], ['class'=> 'list-tags__link'])?> </a>
                                </div>

                            </div>
                        </div><!-- end sorting -->

                        <?php if ($moncases->count() > 0) : ?>
                        <?php foreach ($moncases as $moncases) : ?>
                        <article class="card clearfix">
                            <div class="card__img">
                                <img class="img-responsive" src="webroot/media/cards/1.jpg" height="196" width="235" alt="foto">
                            </div>
                            <div class="card__inner">
                                <h2 class="card__title ui-title-inner"><?= h($moncases->differential_diagnosis) ?></h2>
                                <div class="decor-1"></div>
                                <div class="card__description">
                                    <p><?= h($moncases->diagnosis) ?></p>
                                </div>
                                <ul class="card__list list-unstyled">
                                    <li class="card-list__row">
                                        <span class="card-list__title">Imaging:</span>
                                        <span class="card-list__info"><?= h($moncases->imaging) ?></span>
                                    </li>
                                    <li class="card-list__row">
                                        <span class="card-list__title">Findings:</span>
                                        <span class="card-list__info"><?= h($moncases->findings) ?></span>
                                    </li>
                                    <li class="card-list__row">
                                        <span class="card-list__title">Teaching Points:</span>
                                        <span class="card-list__info"><?= h($moncases->teaching_points) ?></span>
                                    </li>
                                </ul>

                        </article>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No results found.</p>
                        <?php endif; ?>

                    </main><!-- end main-content -->
                </div><!-- end col -->

                <div class="col-md-3">
                    <aside class="sidebar">
                        <!-- FILTER CASE TYPE-->
                        <section class="widget widget_mod-a">
                            <?= $this->Form->create(null, ['url' => ['controller' => 'moncases', 'action' => 'userlist'], 'type' => 'get']) ?>
                            <h3 class="widget-title">CASE TYPE</h3>
                            <div class="decor-1"></div>
                            <div class="widget-content">
                                <?= $this->Form->select('case_type', [
                                    'Oscer' => 'Oscer',
                                    'Long' => 'Long',
                                    'Medium' => 'Medium',
                                    'Short' => 'Short',
                                    'General' => 'General',
                                ], [
                                    'class' => 'select select_mod-a jelect',
                                    'empty' => 'Choose Case Type'
                                ]); ?>
                            </div>
                        </section>
                            <section class="widget widget_mod-a">
                                <h3 class="widget-title">Contributer</h3>
                                <div class="decor-1"></div>
                                <div class="widget-content">
                                    <?= $this->Form->select('contributor', [
                                        'Trainee' => 'Trainee',
                                        'Consultant' => 'Consultant',
                                        'Library' => 'Library',
                                    ], [
                                        'class' => 'select select_mod-a jelect',
                                        'empty' => 'Choose Contributor'
                                    ]); ?>
                                </div>
                            </section>
                            <section class="widget widget_mod-a">
                                <h3 class="widget-title">Rating</h3>
                                <div class="decor-1"></div>
                                <div class="widget-content">
                                    <?= $this->Form->select('rating', [
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                        '4' => '4',
                                        '5' => '5',
                                    ], [
                                        'class' => 'select select_mod-a jelect',
                                        'empty' => 'Choose Rating'
                                    ]); ?>
                                </div>
                            </section>
                            <section class="widget widget_mod-a">
                                <h3 class="widget-title">Imaging</h3>
                                <div class="decor-1"></div>
                                <div class="widget-content">
                                    <?= $this->Form->select('Imaging', [
                                        'Test' => 'Test',
                                    ], [
                                        'class' => 'select select_mod-a jelect',
                                        'empty' => 'Choose Imaging'
                                    ]); ?>
                                </div>
                            </section>

                        <div class="btn">
                            <div class="btn-filter wrap__btn-skew-r js-filter">
                            <?= $this->Form->button(__('Filter'), ['class' =>'btn-skew-r btn-effect btn-skew-r__inner']) ?>
                            <?= $this->Form->end() ?>
                            </div>
                        </div>
                            </aside>dfc
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
<?= $this->Html->script('/assets/js/cssua.min.js'); ?>
<?= $this->Html->script('/assets/js/wow.min.js'); ?>
<?= $this->Html->script('/assets/js/custom.js'); ?>

<!-- Bootstrap core JavaScript-->
<?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>

<!-- Core plugin JavaScript-->
<?= $this->Html->script('/vendor/jquery-easing/jquery.easing.min.js') ?>

<!-- Custom scripts for all pages-->
<?= $this->Html->script('/js/sb-admin-2.min.js') ?>
<?= $this->fetch('script') ?>
