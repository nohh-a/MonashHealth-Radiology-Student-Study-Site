<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */

$this->assign('title', 'Add Medium Case - Cases');
?>

<?= $this->Html->css('/webroot/css/valid-msg.css') ?>

<?= $this->Html->css('/webroot/css/star.css') ?>
<?= $this->Html->css('/webroot/css/animate.min.css') ?>
<?= $this->Html->css('/webroot/css/bootstrap.min.css') ?>
<?= $this->Html->css('/webroot/css/bootstrap-datepicker.css') ?>
<?= $this->Html->css('/webroot/css/fontawesome-all.css') ?>
<?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', ['integrity' => 'sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9', 'crossorigin' => 'anonymous']) ?>


<section class="page-title bg-color-1 text-center">
    <div class="auto-container">
        <div class="content-box">
            <h1>Add New Medium Case</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'userlist'])?>">Case List</a></li>
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'addnewcase'])?>">Select Case Type</a></li>
                <li>MEDIUM</li>
            </ul>
        </div>
    </div>
</section>

<div class="row justify-content-center align-items-center">

    <div class="col-md-8">
        <div class="card-footer">
            <?= $this->Flash->render() ?>
        </div>

        <div class="moncases form content">

            <?= $this->Form->create($moncase, ['enctype' => 'multipart/form-data']) ?>

            <div class="card">
                <h5 class="card-header text-center" style="padding-top: 20px;"></h5>
                <div class="card-body">
                    <div style="text-align: center;">
                        <div style="text-align: center;">

                            <!-- for front view-->
                            <div class="row">
                                <div class="col-md-3">
                                    <?=$this->Form->control('case_type', [
                                        'class' => 'form-control',
                                        'default' => 'MEDIUM',
                                        'readonly' => true,
                                        'disabled' => true,
                                        'style' => 'text-align: center;',
                                    ])?>
                                </div>
                                <div class="col-md-3">
                                    <?=$this->Form->control('author', [
                                        'class' => 'form-control',
                                        'required' => true,
                                        'value' => $author,
                                        'readonly' => true,
                                        'type' => 'text',
                                        'maxlength' => 50,
                                        'disabled' => true,
                                        'style' => 'text-align: center;',
                                    ])?>
                                </div>
                                <div class="col-md-3">
                                    <?=$this->Form->control('contributor', [
                                        'class' => 'form-control',
                                        'required' => true,
                                        'value' => $contributor,
                                        'readonly' => true,
                                        'type' => 'text',
                                        'maxlength' => 50,
                                        'disabled' => true,
                                        'style' => 'text-align: center;',
                                    ])?>
                                </div>
                                <div class="col-md-3">
                                    <?= $this->Form->control('date', [
                                        'class' => 'form-control',
                                        'type' => 'date',
                                        'value' => date('d-m-Y'),
                                        'required' => true,
                                        'readonly' => true,
                                        'disabled' => true,
                                        'style' => 'text-align: center;',
                                    ]) ?>
                                </div>
                            </div>

                            <!-- for background upload data-->
                            <div class="row">
                                <dev class="hidden-element">
                                    <div class="col-md-3">
                                        <?=$this->Form->control('case_type', [
                                            'class' => 'form-control',
                                            'default' => 'MEDIUM',
                                            'readonly' => true,
                                        ])?>
                                    </div>
                                    <div class="col-md-3">
                                        <?=$this->Form->control('author', [
                                            'class' => 'form-control',
                                            'required' => true,
                                            'value' => $author,
                                            'readonly' => true,
                                            'type' => 'text',
                                            'maxlength' => 50,

                                        ])?>
                                    </div>
                                    <div class="col-md-3">
                                        <?=$this->Form->control('contributor', [
                                            'class' => 'form-control',
                                            'required' => true,
                                            'value' => $contributor,
                                            'readonly' => true,
                                            'type' => 'text',
                                            'maxlength' => 50,

                                        ])?>
                                    </div>
                                    <div class="col-md-3">
                                        <?= $this->Form->control('date', [
                                            'class' => 'form-control',
                                            'type' => 'date',
                                            'value' => date('d-m-Y'),
                                            'required' => true,
                                            'readonly' => true,

                                        ]) ?>
                                    </div>
                                </dev>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <!--must enter in-->
                        <div class="accordion" id="accordionPanelsStayOpenExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Case Details #1 (For Quick Creation)
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <?= $this->Form->control('accession_no', [
                                                    'class' => 'form-control',
                                                    'type' => 'text',
                                                    'maxlength' => 30,
                                                    'required' => true,
                                                    'label' => ['class' => 'required-label', 'text' => 'Accession No'],
                                                ])
                                                ?>
                                            </div>
                                            <div class="col-md-7">
                                                <?= $this->Form->control('diagnosis', [
                                                    'class' => 'form-control',
                                                    'maxlength' => 48,
                                                    'type' => 'text',
                                                    'required' => true,
                                                    'label' => ['class' => 'required-label', 'text' => 'Diagnosis'],
                                                ])
                                                ?>
                                            </div>

                                            <div class="col-md-5">
                                                <?= $this->Form->control('image_url', [
                                                    'type' => 'file',
                                                    'label' => 'Image Upload (Optional) (PNG, JPEG, JPG) ',
                                                    'class' => 'form-control'
                                                ])
                                                ?>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Case Details #2 (Optional)
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <?= $this->Form->label('imaging', 'Imaging') ?>
                                                    <?= $this->Form->select('imaging', [
                                                        'X-ray' => 'X-ray',
                                                        'Ultrasound' => 'Ultrasound',
                                                        'CT' => 'CT',
                                                        'MRI' => 'MRI',
                                                        'Nuclear Medicine' => 'Nuclear Medicine',
                                                        'Fluoroscopy' => 'Fluoroscopy',
                                                        'Mammography' => 'Mammography',
                                                        'Other' => 'Other',
                                                    ], [
                                                        'class' => 'form-control',
                                                        'empty' => 'Select Imaging',
                                                    ]) ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <?= $this->Form->label('specialty', 'Specialty') ?>
                                                    <?= $this->Form->select('specialty', [
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
                                                        'empty' => 'Select Specialty',
                                                    ]) ?>
                                                </div>
                                            </div>

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
                                                        'empty' => 'Select Rating',
                                                    ]) ?>
                                                </div>

                                                <div class="col-md-6">
                                                    <?= $this->Form->control('max_marks', [
                                                        'class' => 'form-control',
                                                        'label' => 'Maximum Marks',
                                                        'min' => 0,
                                                        'max' => 99,
                                                        'error' => ['value' => 'Maximum marks should be between 0 and 99'],
                                                        'placeholder' => 'Enter a number between 0 and 99',
                                                    ])
                                                    ?>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?= $this->Form->control('history', [
                                                        'class' => 'form-control',
                                                        'maxlength' => 236,
                                                    ])
                                                    ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <?= $this->Form->control('findings', [
                                                        'class' => 'form-control',
                                                        'maxlength' => 236,
                                                    ])
                                                    ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <?= $this->Form->control('teaching_points', [
                                                        'class' => 'form-control',
                                                        'maxlength' => 236,
                                                    ]); ?>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                    <div class="card-footer text-center">
                               <?php  if (\Cake\Core\Configure::read('DemoMode')): ?>
                                    <button
                                        type="button"
                                        class="theme-btn style-two"
                                        onclick="alert('This website is running in demo mode. New cases cannot be created.')"
                                    >
                                        Create
                                    </button>
                                <?php else: ?>
                                    <?= $this->Form->button(__('Create'), ['class' => 'theme-btn style-two']) ?>
                                <?php endif; ?>
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
            </div>
        </div>
    </div>
</div>
<br><br>


