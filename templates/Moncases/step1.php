<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */
?>

<html lang="en">
<br>
<head>
    <meta charset="utf-8">
    <title>Add a New Case</title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('/webroot/css/animate.min.css') ?>
    <?= $this->Html->css('/webroot/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/webroot/css/bootstrap-datepicker.css') ?>
    <?= $this->Html->css('/webroot/css/fontawesome-all.css') ?>

</head>


<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="moncases form content">

                <?= $this->Form->create(null, ['url' => ['controller' => 'moncases', 'action' => 'step1'], 'enctype' => 'multipart/form-data']) ?>

                <div class="card">
                    <h5 class="card-header text-center"><?= __('Add New Case') ?></h5>
                    <div class="wizard-progress">
                        <span>1 of 5 Completed</span>
                        <div class="progress">
                            <div class="progress-bar">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('image_url', ['type' => 'file']); ?>
                                <?= $this->Form->control('date', [
                                    'class' => 'form-control',
                                    'type' => 'date',
                                    'required' => true
                                ])
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('imaging', [
                                    'class' => 'form-control',
                                    'maxlength' => 236,
                                    'required' => true
                                ]); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <?=$this->Form->control('case_type', ['label' => 'Case Type',
                                    'class' => 'form-control',
                                    'options' => [
                                        'Oscer' => 'Oscer',
                                        'Long' => 'Long',
                                        'Medium' => 'Medium',
                                        'Short' => 'Short',
                                        'General' => 'General'
                                    ],
                                    'required' => true
                                ]); ?>
                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('accession_no', [
                                    'class' => 'form-control',
                                    'type' => 'text',
                                    'maxlength' => 50,
                                    'required' => true
                                ]); ?>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <?= $this->Form->control('history', [
                                    'class' => 'form-control',
                                    'maxlength' => 236,
                                    'required' => true
                                ])
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->control('author', [
                                    'class' => 'form-control',
                                    'maxlength' => 236,
                                    'required' => true
                                ])
                                ?>
                            </div>
                        </div>


                        <div class="row">
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
                            </div>
                            <div class="col-md-6">
                                <?= $this->Form->label('speciality', 'Speciality') ?>
                                <?= $this->Form->select('speciality', [
                                    'ABDOMINAL' => 'ABDOMINAL',
                                    'CARDIOTHORACIC' => 'CARDIOTHORACIC',
                                    'NEURO' => 'NEURO',
                                    'HEAD AND NECK' => 'HEAD AND NECK',
                                    'MSK' => 'MSK',
                                    'BREAST' => 'BREAST',
                                    'GYN' => 'GYN',
                                    'O+G' => 'O+G',
                                    'PEADS' => 'PEADS',
                                    'VASCULAR' => 'VASCULAR',
                                    'INTERVENTION' => 'INTERVENTION',
                                    // Abdominal, Cardiothoracic, Neuro, Head and Neck, MSK, Breast, Gyn, O+G, Paeds, Vascular, Intervention.
                                ], [
                                    'class' => 'form-control',
                                    'required' => true,
                                    'empty' => '- Select Speciality -',
                                ]) ?>
                            </div>
                        </div>



                    </div>
                    <div class="card-footer text-right">
                        <?= $this->Form->button('Next', [
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
</div>


