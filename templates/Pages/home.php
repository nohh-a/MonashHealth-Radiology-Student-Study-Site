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

			<div id="wrapper">

				<!-- HEADER -->
				<div class="header">



					<div class="header__inner">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-xs-12">
                <a href="<?= $this->Url->build('/') ?>" class="logo">
                    <img class="logo__img img-responsive" src="webroot/img/logo.png" height="50" width="111" alt="Logo">
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
                      <ul  class="dropdown-menu">
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

							<h1 class="ui-title-page">case listings</h1>

					</div><!-- end block-title__inner -->
				</div><!-- end block-title -->

				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<main class="main-content">
								<div class="sorting">
									<div class="sorting__inner">
										<div class="sorting__item">
											<span class="sorting__title">select View</span>
										</div>
										<div class="sorting__item">
											<span class="sorting__title">show on page</span>
											<div  class="select jelect">
												<input id="page" name="page" value="0" data-text="imagemin" type="text" class="jelect-input">
												<div tabindex="0" role="button" class="jelect-current">10 Items</div>
												<ul class="jelect-options">
													<li  class="jelect-option jelect-option_state_active">10 Items</li>
													<li  class="jelect-option">20 Items</li>
													<li  class="jelect-option">30 Items</li>
												</ul>
											</div>
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
									</div>
								</div><!-- end sorting -->

								<article class="card clearfix">
									<div class="card__img">
										<img class="img-responsive" src="webroot/media/cards/1.jpg" height="196" width="235" alt="foto">
									</div>
									<div class="card__inner">
										<h2 class="card__title ui-title-inner">MERCEDES-BENZ SLR MCLAREN</h2>
										<div class="decor-1"></div>
										<div class="card__description">
											<p>In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate and the Silverado ...</p>
										</div>
										<ul class="card__list list-unstyled">
											<li class="card-list__row">
												<span class="card-list__title">Body Style:</span>
												<span class="card-list__info">Sedan</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Engine:</span>
												<span class="card-list__info">DOHC 24-valve V-6</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Mileage:</span>
												<span class="card-list__info">35,000 KM</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Color:</span>
												<span class="card-list__info">White</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Transmission:</span>
												<span class="card-list__info">6-Speed Auto</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Specs</span>
												<span class="card-list__info">2-Passenger, 2-Door</span>
											</li>
										</ul>
										<div class="card__price">PRICE:<span class="card__price-number">$33,905</span></div>
									</div>
								</article>

								<article class="card clearfix">
									<div class="card__img">
										<img class="img-responsive" src="webroot/media/cards/2.jpg" height="196" width="235" alt="foto">
										<span class="card__wrap-label"><span class="card__label">FEATURED</span></span>
									</div>
									<div class="card__inner">
										<h2 class="card__title ui-title-inner">MBENTLEY CONTINENTAL Supersports</h2>
										<div class="decor-1"></div>
										<div class="card__description">
											<p>In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate and the Silverado ...</p>
										</div>
										<ul class="card__list list-unstyled">
											<li class="card-list__row">
												<span class="card-list__title">Body Style:</span>
												<span class="card-list__info">Sedan</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Engine:</span>
												<span class="card-list__info">DOHC 24-valve V-6</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Mileage:</span>
												<span class="card-list__info">35,000 KM</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Color:</span>
												<span class="card-list__info">White</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Transmission:</span>
												<span class="card-list__info">6-Speed Auto</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Specs</span>
												<span class="card-list__info">2-Passenger, 2-Door</span>
											</li>
										</ul>
										<div class="card__price">PRICE:<span class="card__price-number">$29,415</span></div>
									</div>
								</article>

								<article class="card clearfix">
									<div class="card__img">
										<img class="img-responsive" src="webroot/media/cards/3.jpg" height="196" width="235" alt="foto">
									</div>
									<div class="card__inner">
										<h2 class="card__title ui-title-inner">2015 Ferrari FXX</h2>
										<div class="decor-1"></div>
										<div class="card__description">
											<p>In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate and the Silverado ...</p>
										</div>
										<ul class="card__list list-unstyled">
											<li class="card-list__row">
												<span class="card-list__title">Body Style:</span>
												<span class="card-list__info">Sedan</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Engine:</span>
												<span class="card-list__info">DOHC 24-valve V-6</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Mileage:</span>
												<span class="card-list__info">35,000 KM</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Color:</span>
												<span class="card-list__info">White</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Transmission:</span>
												<span class="card-list__info">6-Speed Auto</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Specs</span>
												<span class="card-list__info">2-Passenger, 2-Door</span>
											</li>
										</ul>
										<div class="card__price">PRICE:<span class="card__price-number">$14,495</span></div>
									</div>
								</article>

								<article class="card clearfix">
									<div class="card__img">
										<img class="img-responsive" src="webroot/media/cards/4.jpg" height="196" width="235" alt="foto">
									</div>
									<div class="card__inner">
										<h2 class="card__title ui-title-inner">DODGE VIPER 2015</h2>
										<div class="decor-1"></div>
										<div class="card__description">
											<p>In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate and the Silverado ...</p>
										</div>
										<ul class="card__list list-unstyled">
											<li class="card-list__row">
												<span class="card-list__title">Body Style:</span>
												<span class="card-list__info">Sedan</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Engine:</span>
												<span class="card-list__info">DOHC 24-valve V-6</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Mileage:</span>
												<span class="card-list__info">35,000 KM</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Color:</span>
												<span class="card-list__info">White</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Transmission:</span>
												<span class="card-list__info">6-Speed Auto</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Specs</span>
												<span class="card-list__info">2-Passenger, 2-Door</span>
											</li>
										</ul>
										<div class="card__price">PRICE:<span class="card__price-number">$17,890</span></div>
									</div>
								</article>

								<article class="card clearfix">
									<div class="card__img">
										<img class="img-responsive" src="webroot/media/cards/5.jpg" height="196" width="235" alt="foto">
									</div>
									<div class="card__inner">
										<h2 class="card__title ui-title-inner">LAND ROVER RANGE ROVER HSE</h2>
										<div class="decor-1"></div>
										<div class="card__description">
											<p>In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate and the Silverado ...</p>
										</div>
										<ul class="card__list list-unstyled">
											<li class="card-list__row">
												<span class="card-list__title">Body Style:</span>
												<span class="card-list__info">Sedan</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Engine:</span>
												<span class="card-list__info">DOHC 24-valve V-6</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Mileage:</span>
												<span class="card-list__info">35,000 KM</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Color:</span>
												<span class="card-list__info">White</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Transmission:</span>
												<span class="card-list__info">6-Speed Auto</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Specs</span>
												<span class="card-list__info">2-Passenger, 2-Door</span>
											</li>
										</ul>
										<div class="card__price">PRICE:<span class="card__price-number">$29,500</span></div>
									</div>
								</article>

								<article class="card clearfix">
									<div class="card__img">
										<img class="img-responsive" src="webroot/media/cards/6.jpg" height="196" width="235" alt="foto">
									</div>
									<div class="card__inner">
										<h2 class="card__title ui-title-inner">2014 LEXUS GX 470 PREMIUM</h2>
										<div class="decor-1"></div>
										<div class="card__description">
											<p>In a pickup market gone fancy, the Silverado sticks to its basic-truck recipe. The steering is accurate and the Silverado ...</p>
										</div>
										<ul class="card__list list-unstyled">
											<li class="card-list__row">
												<span class="card-list__title">Body Style:</span>
												<span class="card-list__info">Sedan</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Engine:</span>
												<span class="card-list__info">DOHC 24-valve V-6</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Mileage:</span>
												<span class="card-list__info">35,000 KM</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Color:</span>
												<span class="card-list__info">White</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Transmission:</span>
												<span class="card-list__info">6-Speed Auto</span>
											</li>
											<li class="card-list__row">
												<span class="card-list__title">Specs</span>
												<span class="card-list__info">2-Passenger, 2-Door</span>
											</li>
										</ul>
										<div class="card__price">PRICE:<span class="card__price-number">$42,650</span></div>
									</div>
								</article>

								<ul class="pagination">
									<li><a href="javascript:void(0);">PREV</a></li>
									<li class="active"><a href="javascript:void(0);">1</a></li>
									<li><a href="javascript:void(0);">2</a></li>
									<li><a href="javascript:void(0);">3</a></li>
									<li><a href="javascript:void(0);">4</a></li>
									<li><a href="javascript:void(0);">5</a></li>
									<li><a href="javascript:void(0);">NEXT</a></li>
								</ul>

							</main><!-- end main-content -->
						</div><!-- end col -->


						<div class="col-md-3">
							<aside class="sidebar">
								<section class="widget widget_mod-a">
									<h3 class="widget-title">BY MAKE</h3>
									<div class="decor-1"></div>
									<div class="widget-content">
										<ul class="list-categories list-unstyled">
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">audi (5)</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">BENTLEY (10)</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">BMW (70)</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">CHEVROLET (6)</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">MERCEDES-BENZ (80)</a>
											</li>
											<li class="list-categories__item">
												<a class="list-categories__link" href="javascript:void(0);">LAND ROVER (36)</a>
											</li>
										</ul>
										<a class="list-categories__more" href="javascript:void(0);">VIEW MORE</a>
									</div>
								</section>

								<div class="wrap-filter">
									<section class="widget widget_mod-a">
										<h3 class="widget-title">price range</h3>
										<div class="decor-1"></div>
										<div class="widget-content">
											<div class="slider-price" id="slider-price"></div>
											<span class="slider-price__wrap-input">
												<input class="slider-price__input" id="slider-price_min">
												<span>-</span>
												<input class="slider-price__input" id="slider-price_max">
											</span>
										</div>
									</section>

									<section class="widget widget_mod-a">
										<h3 class="widget-title">vehicle type</h3>
										<div class="decor-1"></div>
										<div class="widget-content">
											<div  class="select select_mod-a jelect">
												<input id="vehicle-type" name="vehicle-type" value="0" data-text="imagemin" type="text" class="jelect-input">
												<div tabindex="0" role="button" class="jelect-current">All Types</div>
												<ul class="jelect-options">
													<li  class="jelect-option jelect-option_state_active">Type 1</li>
													<li  class="jelect-option">Type 2</li>
													<li  class="jelect-option">Type 3</li>
												</ul>
											</div>
										</div>
									</section>

									<section class="widget widget_mod-a">
										<h3 class="widget-title">Fuel Type</h3>
										<div class="decor-1"></div>
										<div class="widget-content">
											<div  class="select select_mod-a jelect">
												<input id="fuel-type" name="fuel-type" value="0" data-text="imagemin" type="text" class="jelect-input">
												<div tabindex="0" role="button" class="jelect-current">All Fuel Types</div>
												<ul class="jelect-options">
													<li  class="jelect-option jelect-option_state_active">Type 1</li>
													<li  class="jelect-option">Type 2</li>
													<li  class="jelect-option">Type 3</li>
												</ul>
											</div>
										</div>
									</section>
								</div><!-- end wrap-filter -->

								<div class="btn">
									<div class="btn-filter wrap__btn-skew-r js-filter">
										<button class="btn-skew-r btn-effect "><span class="btn-skew-r__inner">filter vehicles</span></button>
									</div>
								</div>

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

