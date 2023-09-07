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

?>


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


<!--            <figure class="image-box">-->
<!--                <a href="https://monashimaging.monashhealth.org/portal/Login.aspx" class="lightbox-image" data-fancybox="gallery">-->
<!--                    <img src="--><?php //= $this->Url->image($moncase -> image_url, ['height'=>100, 'width'=>100, 'alt'=>'photo']) ?><!--">-->
<!--                </a>-->
<!--            </figure>-->

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
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <?= $this->Html->link(__('Edit Details'), ['action' => 'edit', $moncase->id], ['class' => 'theme-btn style-two']) ?>
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
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <?= $this->Html->link(__('Edit Details'), ['action' => 'edit', $moncase->id], ['class' => 'theme-btn style-two']) ?>
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

    </div>
</section>
