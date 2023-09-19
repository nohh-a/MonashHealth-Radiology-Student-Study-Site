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

    .side-btn {
        display: flex;
        justify-content: center;
        align-items: center;
    }


</style>
</head>
<!--Page Title-->
<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="sec-title">
        <p><?= h($moncase->case_type) ?></p>
        <h2><?= h($moncase->diagnosis) ?></h2>
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
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 side-btn">
                            <?=
                            $this->Form->postLink(__('Favorite'),
                                ['action' => 'savecaseaction', $moncase->id],
                                ['class' => 'theme-btn style-two',
                                    'confirm' => __('Are you sure you want to save # {0}?', $moncase->diagnosis)])
                            ?>
                        </div>

                        <br><br>

                        <div class="col-lg-6 col-md-6 col-sm-12 side-btn">
                            <?=
                            $this->Html->link(__('Edit'),
                                ['action' => 'edit', $moncase->id],
                                ['class' => 'theme-btn style-two'])
                            ?>
                        </div>
                    </div>



                <section class="accordion-box" style="padding: 0px 0px 0px 0px;">
                    <div class="accordion block active-block">
                        <div class="acc-btn active">
                            <h4><span>+</span> Case Details</h4>
                        </div>
                        <div class="acc-content current">
                        <ul class="content">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <li><h6>Accession No: </h6> <?= !empty($moncase->accession_no) ? h($moncase->accession_no) : 'N/A' ?></li>
                                    <li><h6>Specialty: </h6> <?= !empty($moncase->speciality) ? h($moncase->speciality) : 'N/A' ?></li>
                                    <li><h6>Seen By: </h6> <?= !empty($moncase->seen_by) ? h($moncase->seen_by) : 'N/A' ?></li>
                                    <li><h6>Tags: </h6> <?= !empty($moncase->tags) ? h($moncase->tags) : 'N/A' ?></li>
                                    <li><h6>Date: </h6> <?= !empty($moncase->date) ? h($moncase->date) : 'N/A' ?></li>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <li><h6>Marks: </h6> <?= !empty($moncase->max_marks) ? h($moncase->max_marks) : 'N/A' ?></li>
                                    <li><h6>Case Rating:</h6><?= !empty($moncase->rating) ? h($moncase->rating) : 'N/A' ?></li>
                                    <li><h6>Author: </h6> <?= !empty($moncase->author) ? h($moncase->author) : 'N/A' ?></li>
                                    <li><h6>Contributor: </h6> <?= !empty($moncase->contributor) ? h($moncase->contributor) : 'N/A' ?></li>
                                </div>
                            </div>


                        </ul>
                        </div>
                   </div>

                </section>

                </div>

            </div>

            <section class="pricing-section bg-color-1 sec-pad">
                <div class="auto-container">
                    <div class="tabs-box">
                        <div class="upper-box clearfix">
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
                                                        <h3>Differential Diagnosis </h3>
                                                        <li><?= !empty($moncase->differential_diagnosis) ? h($moncase->differential_diagnosis) : 'N/A' ?></li>
                                                        <h3>History </h3>
                                                        <li><?= !empty($moncase->history) ? h($moncase->history) : 'N/A' ?></li>
                                                        <h3>Findings </h3>
                                                        <li><?= !empty($moncase->findings) ? h($moncase->findings) : 'N/A' ?></li>
                                                        <h3>Imaging</h3>
                                                        <li><?= !empty($moncase->imaging) ? h($moncase->imaging) : 'N/A' ?></li>
                                                        <h3>Teaching Points</h3>
                                                        <li><?= !empty($moncase->teaching_points) ? h($moncase->teaching_points) : 'N/A' ?></li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <div class="row">

                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <?= $this->Html->link(__('Edit Details'), ['action' => 'edit', $moncase->id], ['class' => 'theme-btn style-two']) ?>
                                                        </div>

                                                        <br><br>

                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <?= $this->Form->postLink(__('Favorite'), ['action' => 'savecaseaction', $moncase->id], ['class' => 'theme-btn style-two', 'confirm' => __('Are you sure you want to save # {0}?', $moncase->diagnosis)]) ?>
                                                        </div>

                                                        <br><br>

                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <?= $this->Form->postLink(__('Archive'), ['action' => 'changecasestatus', $moncase->id], ['class' => 'theme-btn style-two', 'confirm' => __('Are you sure you want to archive # {0}?', $moncase->diagnosis)]) ?>
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
                                                        <li><?= !empty($moncase->further_investigation) ? h($moncase->further_investigation) : 'N/A' ?></li>
                                                        <h3>Management</h3>
                                                        <li><?= !empty($moncase->management) ? h($moncase->management) : 'N/A' ?></li>
                                                        <h3>Anatomy</h3>
                                                        <li><?= !empty($moncase->anatomy) ? h($moncase->anatomy) : 'N/A' ?></li>
                                                        <h3>Pathology</h3>
                                                        <li><?= !empty($moncase->pathology) ? h($moncase->pathology) : 'N/A' ?></li>
                                                        <h3>Safety</h3>
                                                        <li><?= !empty($moncase->safety) ? h($moncase->safety) : 'N/A' ?></li>
                                                        <h3>Intrinsic Roles</h3>
                                                        <li><?= !empty($moncase->intrinsic_roles) ? h($moncase->intrinsic_roles) : 'N/A' ?></li>

                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <?= $this->Html->link(__('Edit Details'), ['action' => 'edit', $moncase->id], ['class' => 'theme-btn style-two']) ?>
                                                        </div>

                                                        <br><br>

                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <?= $this->Form->postLink(__('Save'), ['action' => 'savecaseaction', $moncase->id], ['class' => 'theme-btn style-two', 'confirm' => __('Are you sure you want to save # {0}?', $moncase->diagnosis)]) ?>
                                                        </div>

                                                        <br><br>

                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <?= $this->Form->postLink(__('Archive'), ['action' => 'changecasestatus', $moncase->id], ['class' => 'theme-btn style-two', 'confirm' => __('Are you sure you want to archive # {0}?', $moncase->diagnosis)]) ?>
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

