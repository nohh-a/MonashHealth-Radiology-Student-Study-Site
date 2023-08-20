<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Step 5</title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('/webroot/css/animate.min.css') ?>
    <?= $this->Html->css('/webroot/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/webroot/css/bootstrap-datepicker.css') ?>
    <?= $this->Html->css('/webroot/css/fontawesome-all.css') ?>

</head>

<div class="row justify-content-center align-items-center">
    <div class="col-md-8">
        <div class="moncases form content">

            <?= $this->Form->create($moncase, ['enctype' => 'multipart/form-data']) ?>

            <div class="card">
                <h5 class="card-header text-center"><?= __('Add New Case') ?></h5>
                <div class="wizard-progress">
                    <span>5 of 5 Completed</span>
                    <div class="progress">
                        <div class="progress-bar", style="width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <?= $this->Form->control('further_investigation', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
                            <?= $this->Form->control('teaching_points', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>

                        </div>

                        <div class="col-md-6">
                            <?= $this->Form->control('seen_by', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
                            <?= $this->Form->control('tags', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>

                        </div>

                        <div class="col-md-6">
                            <?= $this->Form->label('rating', 'Rating') ?>
                            <?= $this->Form->select('rating', [
                                '1' => 1,
                                '2' => 2,
                                '3' => 3,
                                '4' => 4,
                                '5' => 5,
                            ], [
                                'class' => 'form-control',
                                'required' => true,
                                'empty' => '- Select Rating -',
                            ]) ?>

                    </div>

                </div>
                <div class="card-footer text-right">
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg']) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

