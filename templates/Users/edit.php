<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center"><?= __('Add User') ?></div>
                <div class="card-body">
                    <?= $this->Form->create($user) ?>
                    <fieldset>
                        <div class="form-group">
                            <?= $this->Form->control('username', [
                                'type' => 'text',
                                'class' => 'form-control',
                                'maxlength' => 20
                            ])
                            ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('email', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('password', ['class' => 'form-control']) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->label('access_role', 'Access Role') ?>
                            <?= $this->Form->select('access_role', [
                                'ADMIN' => 'ADMIN',
                                'TRAINEE' => 'TRAINEE',
                                'CONSULTANT' => 'CONSULTANT',
                            ], [
                                'class' => 'form-control',
                                'required' => true,
                                'empty' => '- Select Access Role -',
                            ]) ?>
                        </div>
                    </fieldset>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>

