<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */
?>
    <?= $this->Html->css('/webroot/css/animate.min.css') ?>
    <?= $this->Html->css('/webroot/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/webroot/css/bootstrap-datepicker.css') ?>
    <?= $this->Html->css('/webroot/css/fontawesome-all.css') ?>
    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', ['integrity' => 'sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9', 'crossorigin' => 'anonymous']) ?>


    <div class="row justify-content-center align-items-center">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-button active" href="<?= $this->Url->build(['controller'=>'Moncases','action'=> 'userlist']) ?>">Home</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-md-8">
            <div class="moncases form content">

                <?= $this->Form->create($moncase, ['enctype' => 'multipart/form-data']) ?>

                <div class="card">
                    <h5 class="card-header text-center"><?= __('Edit Case') ?></h5>
                    <div class="card-body">
                        <div style="text-align: center;">
                            <?=$this->Form->control('case_type', ['label' => 'Case Type',
                                'class' => 'form-control',
                                'options' => [
                                    'OSCER' => 'OSCER',
                                    'LONG' => 'LONG',
                                    'MEDIUM' => 'MEDIUM',
                                    'SHORT' => 'SHORT',
                                    'GENERAL' => 'GENERAL'
                                ],
                                'disabled' => 'true',
                            ])
                            ?>
                        </div>
                        <br><br>
                        <div class="row">
                            <!--must enter in-->
                            <div class="accordion" id="accordionPanelsStayOpenExample">

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Case Details #1
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <?= $this->Form->create($moncase, ['type' => 'file']) ?>
                                            <div class="row">
                                                <?= $this->Html->image('/img/' . $moncase->image_url, ['width' => '100px']); ?>
                                                <?= $this->Form->control('image_url', [
                                                    'type' => 'file',
                                                    'class' => 'form-control'
                                                ]); ?>
                                            </div>

                                            <?= $this->Form->control('accession_no', [
                                                'class' => 'form-control',
                                                'type' => 'text',
                                                'maxlength' => 50,
                                                'required' => true
                                            ]); ?>


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
                                                'empty' => 'Select Speciality',
                                            ]) ?>

                                            <?= $this->Form->control('diagnosis', [
                                                'class' => 'form-control',
                                                'maxlength' => 236,
                                                'required' => true,
                                            ])
                                            ?>

                                            <?= $this->Form->control('differential_diagnosis', [
                                                'class' => 'form-control',
                                                'maxlength' => 236,
                                                'required' => true
                                            ])
                                            ?>

                                            <?= $this->Form->control('imaging', [
                                                'class' => 'form-control',
                                                'maxlength' => 236,
                                                'required' => true
                                            ]); ?>

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

                                            <?= $this->Form->control('max_marks', [
                                                'class' => 'form-control',
                                                'label' => 'Maximum Marks',
                                                'min' => 0,
                                                'max' => 99,
                                                'error' => ['value' => 'Maximum marks should be between -1 and 999']
                                            ])
                                            ?>

                                            <?= $this->Form->control('date', [
                                                'class' => 'form-control',
                                                'type' => 'date',
                                                'value' => date('d-m-Y'),
                                                'required' => true
                                            ])
                                            ?>

                                            <?= $this->Form->control('author', [
                                                'class' => 'form-control',
                                                'maxlength' => 236,
                                            ])
                                            ?>


                                            <?= $this->Form->label('contributor', 'Contributor') ?>
                                            <?= $this->Form->select('contributor', [
                                                'TRAINEE' => 'TRAINEE',
                                                'CONSULTANT' => 'CONSULTANT',
                                                'LIBRARY' => 'LIBRARY'
                                            ], [
                                                'class' => 'form-control',
                                                'empty' => '- Select Contributor -',
                                            ])
                                            ?>



                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Case Details #2
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?= $this->Form->control('history', [
                                                    'class' => 'form-control',
                                                    'maxlength' => 236,
                                                ])
                                                ?>

                                                <?= $this->Form->control('findings', [
                                                    'class' => 'form-control',
                                                    'maxlength' => 236,
                                                    'required' => true
                                                ])
                                                ?>


                                                <?= $this->Form->control('teaching_points', [
                                                    'class' => 'form-control',
                                                    'maxlength' => 236,
                                                    'required' => true
                                                ])
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Case Details #3
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <?= $this->Form->control('further_investigation', [
                                                    'class' => 'form-control',
                                                    'maxlength' => 236,
                                                ])
                                                ?>

                                                <?= $this->Form->control('management', [
                                                    'class' => 'form-control',
                                                    'maxlength' => 236,
                                                ])
                                                ?>

                                                <?= $this->Form->control('anatomy', [
                                                    'class' => 'form-control',
                                                    'maxlength' => 236,
                                                ])
                                                ?>

                                                <?= $this->Form->control('pathology', [
                                                    'class' => 'form-control',
                                                    'maxlength' => 236,
                                                ])
                                                ?>


                                                <?= $this->Form->control('intepretation', [
                                                    'class' => 'form-control',
                                                    'maxlength' => 236,
                                                ])
                                                ?>

                                                <?= $this->Form->control('tags', [
                                                    'class' => 'form-control',
                                                    'maxlength' => 236,
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


                                                <?= $this->Form->control('seen_by', [
                                                    'class' => 'form-control',
                                                    'maxlength' => 236,
                                                ])
                                                ?>

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

                    <?= $this->Html->script(
                        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js',
                        ['integrity' => 'sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm', 'crossorigin' => 'anonymous']
                    ) ?>

