<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Step 2</title>
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
                    <span>2 of 5 Completed</span>
                    <div class="progress">
                        <div class="progress-bar", style="width: 25%;">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <?= $this->Form->control('max_marks', [
                                'class' => 'form-control',
                                'label' => 'Maximum Marks',
                                'required' => true,
                                'min' => 0,
                                'max' => 99,
                                'error' => ['value' => 'Maximum marks should be between -1 and 999']
                            ])
                            ?>
                        </div>
                        <div class="col-md-12">
                            <?= $this->Form->control('observation', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
                        </div>

                        <div class="col-md-12">
                            <?= $this->Form->control('diagnosis', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>

                        </div>
                    </div>

                </div>
                <div class="card-footer text-right">
                    <?= $this->Form->button(__('Next'), ['class' => 'btn btn-primary btn-lg']) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


