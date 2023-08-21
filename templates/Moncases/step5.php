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

    <style>
        .message.error {
            color: red;
            background-color: #edd4d4;
            border-color: #e6c3c3;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
        }

    </style>

</head>

<div class="row justify-content-center align-items-center">
    <div class="col-md-8">
        <div class="moncases form content">

            <?= $this->Form->create(null, ['url' => ['controller' => 'moncases', 'action' => 'step5'], 'enctype' => 'multipart/form-data']) ?>

            <div class="card">
                <h5 class="card-header text-center"><?= __('Add New Case') ?></h5>
                <?= $this->Flash->render() ?>
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




                        </div>

                        <div class="col-md-6">



                        </div>

                        <div class="col-md-6">


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

