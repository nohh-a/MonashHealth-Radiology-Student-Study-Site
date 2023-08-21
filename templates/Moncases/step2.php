<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add a New Case(2/2)</title>
    <?= $this->Html->meta('icon', 'favicon.ico', ['type' => 'image/x-icon']) ?>

    <?= $this->Html->css('/webroot/css/animate.min.css') ?>
    <?= $this->Html->css('/webroot/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/webroot/css/bootstrap-datepicker.css') ?>
    <?= $this->Html->css('/webroot/css/fontawesome-all.css') ?>

</head>

<div class="row justify-content-center align-items-center">
    <div class="col-md-8">
        <div class="moncases form content">

            <?= $this->Form->create(null, ['url' => ['controller' => 'moncases', 'action' => 'step2']]) ?>

            <div class="card">
                <h5 class="card-header text-center"><?= __('Add New Case') ?></h5>
                <div class="wizard-progress">
                    <span>2 of 2 Completed</span>
                    <div class="progress">
                        <div class="progress-bar", style="width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
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
                                'empty' => '- Select Rating -',
                            ]) ?>

                            <?= $this->Form->control('author', [
                                'class' => 'form-control',
                                'maxlength' => 236,
                                'required' => true
                            ])
                            ?>

                            <?= $this->Form->control('history', [
                                'class' => 'form-control',
                                'maxlength' => 236,
                            ])
                            ?>

                            <?= $this->Form->control('max_marks', [
                                'class' => 'form-control',
                                'label' => 'Maximum Marks',
                                'min' => 0,
                                'max' => 99,
                                'error' => ['value' => 'Maximum marks should be between -1 and 999']
                            ])
                            ?>

                            <?= $this->Form->control('management', [
                                'class' => 'form-control',
                                'maxlength' => 236,
                            ])
                            ?>

                            <?= $this->Form->control('intepretation', [
                                'class' => 'form-control',
                                'maxlength' => 236,
                            ])
                            ?>

                            <?= $this->Form->control('pathology', [
                                'class' => 'form-control',
                                'maxlength' => 236,
                            ])
                            ?>

                            <?= $this->Form->control('tags', [
                                'class' => 'form-control',
                                'maxlength' => 236,
                            ])
                            ?>

                        </div>
                        <div class="col-md-6">
                            <?= $this->Form->label('contributor', 'Contributor') ?>
                            <?= $this->Form->select('contributor', [
                                'TRAINEE' => 'TRAINEE',
                                'CONSULTANT' => 'CONSULTANT',
                                'LIBRARY' => 'LIBRARY'
                            ], [
                                'class' => 'form-control',
                                'required' => true,
                                'empty' => '- Select Contributor -',
                            ])
                            ?>

                            <?= $this->Form->control('observation', [
                                'class' => 'form-control',
                                'maxlength' => 236,
                            ])
                            ?>

                            <?= $this->Form->control('safety', [
                                'class' => 'form-control',
                                'maxlength' => 236,
                            ])
                            ?>

                            <?= $this->Form->control('intrinsic_roles', [
                                'class' => 'form-control',
                                'maxlength' => 236,
                            ])
                            ?>

                            <?= $this->Form->control('anatomy', [
                                'class' => 'form-control',
                                'maxlength' => 236,
                            ])
                            ?>

                            <?= $this->Form->control('further_investigation', [
                                'class' => 'form-control',
                                'maxlength' => 236,
                            ])
                            ?>

                            <?= $this->Form->control('seen_by', [
                                'class' => 'form-control',
                                'maxlength' => 236,
                            ])
                            ?>
                        </div>

                        <div class="col-md-12">


                        </div>
                    </div>

                </div>


                <div class="card-footer text-right">

                    <?= $this->Form->button('Submit', [
                        'type' => 'submit',
                        'class' => 'btn btn-primary btn-lg'
                    ])
                    ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


