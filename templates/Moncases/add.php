<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */
?>

<?= $this->Html->css('/webroot/css/animate.min.css') ?>
<?= $this->Html->css('/webroot/css/bootstrap.min.css') ?>
<?= $this->Html->css('/webroot/css/bootstrap-datepicker.min.css') ?>
<?= $this->Html->css('/webroot/css/fontawesome.css') ?>
<?= $this->Html->css('/webroot/css/bootstrap.min.css') ?>



<div class="row justify-content-center align-items-center">
    <div class="col-md-8">
        <div class="moncases form content">

            <?= $this->Form->create($moncase, ['enctype' => 'multipart/form-data']) ?>

            <div class="card">
                <h5 class="card-header text-center"><?= __('Add New Case') ?></h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                            <?= $this->Form->control('image_url', ['type' => 'file']); ?>

                            <?= $this->Form->control('imaging', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>

                            <?=$this->Form->control('case_type', ['label' => 'Case Type',
                                'class' => 'form-control',
                                'options' => [
                                    'Oscer' => 'Oscer',
                                    'Long' => 'Long',
                                    'Medium' => 'Medium',
                                    'Short' => 'Short',
                                    'General' => 'General'
                                ]
                            ])
                            ?>

                            <?= $this->Form->control('accession_no', [
                                'class' => 'form-control',
                                'type' => 'text',
                                'maxlength' => 50
                            ])
                            ?>
                            <?= $this->Form->control('date', ['class' => 'form-control']) ?>
                            <?= $this->Form->control('history', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>

                            <?= $this->Form->control('max_marks', [
                                'class' => 'form-control',
                                'label' => 'Maximum Marks',
                                'required' => true,
                                'min' => 0,
                                'max' => 99,
                                'error' => ['value' => 'Maximum marks should be between -1 and 999']
                            ])
                            ?>
                            <?= $this->Form->control('observation', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
                            <?= $this->Form->control('diagnosis', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
                            <?= $this->Form->control('author', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?= $this->Form->control('intepretation', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
                            <?= $this->Form->control('safety', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>

                            <?= $this->Form->control('intrinsic_roles', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
                            <?= $this->Form->control('management', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
                            <?= $this->Form->control('anatomy', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
                            <?= $this->Form->control('pathology', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $this->Form->control('findings', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
                            <?= $this->Form->control('differential_diagnosis', [
                                'class' => 'form-control',
                                'maxlength' => 236
                            ])
                            ?>
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
                </div>
                <div class="card-footer text-center">
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-lg']) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


<?= $this->Html->script('/webroot/js/bootstrap.min.js'); ?>
<?= $this->Html->script('/webroot/js/bootstrap-datepicker.min.js'); ?>
<?= $this->Html->script('/webroot/js/jquery.validate.min.js'); ?>
<?= $this->Html->script('/webroot/js/jquery-3.3.1.min.js'); ?>
<?= $this->Html->script('/webroot/js/main.js'); ?>
<?= $this->Html->script('/webroot/js/switch.js'); ?>
<?= $this->Html->script('/webroot/step/step-1.js'); ?>
<?= $this->Html->script('/webroot/step/step-2.js'); ?>
<?= $this->Html->script('/webroot/step/step-3.js'); ?>
<?= $this->Html->script('/webroot/step/step-4.js'); ?>
<?= $this->Html->script('/webroot/step/step-5.js'); ?>
