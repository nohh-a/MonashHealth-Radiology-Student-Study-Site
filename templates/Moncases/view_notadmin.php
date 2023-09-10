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

<head>
    <style>
        li h6 {
            color: #576ec2;
        }
        li {
            padding: 12px;
        }
        body {
            font-size: 15px;
        }

    </style>
</head>


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

            <div class="row">
                <div class="col-lg-8">
                    <figure class="image-box">
                        <a href="https://monashimaging.monashhealth.org/portal/Login.aspx" >
                            <img src="<?= $this->Url->image($moncase -> image_url, ['style' => 'max-width:50%; max-height:50%;', 'alt' => 'photo']) ?>">
                        </a>
                    </figure>
                </div>
                <div class="col-lg-4">

                    <section class="accordion-box" style="padding: 0px 0px 0px 0px;">
                        <div class="accordion block active-block">
                            <div class="acc-btn active">
                                <h4><span>+</span> Case Details</h4>
                            </div>
                            <div class="acc-content current">
                                <ul class="content">
                                    <li><h6>Accession No: </h6> <?= h($moncase->accession_no) ?></li>
                                    <li><h6>Specialty: </h6> <?= h($moncase->speciality) ?></li>
                                    <li><h6>Seen By: </h6> <?= h($moncase->seen_by) ?></li>
                                    <li><h6>Tags: </h6> <?= h($moncase->tags) ?></li>
                                    <li><h6>Date: </h6> <?= h($moncase->date) ?></li>
                                    <li><h6>Marks: </h6> <?= h($moncase->max_marks) ?></li>
                                    <li><h6>Case Rating:</h6><?= h($moncase->rating) ?></li>
                                    <li><h6>Author: </h6> <?= h($moncase->author) ?></li>
                                    <li><h6>Contributor: </h6> <?= h($moncase->contributor) ?></li>

                                </ul>
                            </div>
                        </div>

                    </section>

                </div>

            </div>

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
                                                            <?php if ($author != $caseAuthor): ?>
                                                                <!-- Don't show button when $author is not equal to $caseAuthor -->
                                                            <?php else: ?>
                                                                <?= $this->Html->link(__('Edit Details'), ['action' => 'edit', $moncase->id], ['class' => 'theme-btn style-two']) ?>
                                                            <?php endif; ?>
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
                                                            <?php if ($author != $caseAuthor): ?>
                                                                <!-- Don't show button when $author is not equal to $caseAuthor -->
                                                            <?php else: ?>
                                                                <?= $this->Html->link(__('Edit Details'), ['action' => 'edit', $moncase->id], ['class' => 'theme-btn style-two']) ?>
                                                            <?php endif; ?>
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
