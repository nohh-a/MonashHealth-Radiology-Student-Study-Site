<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->assign('title', 'Add - Users');
?>
<div class="row justify-content-center align-items-center">
    <div class="col-md-8">

        <td><button class="btn btn-primary" onclick="goBack()">Go Back</button></td>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>

        <div class="moncases form content">

            <?= $this->Form->create($user, ['enctype' => 'multipart/form-data']) ?>

            <div class="card">
                <h5 class="card-header text-center"><?= __('Add New User') ?></h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            echo $this->Form->control('username', [
                                'style' => 'width: 500px',
                                'maxlength' => 20
                            ]);
                            echo $this->Form->control('email', ['style' => 'width: 500px']);
                            echo $this->Form->control('first_name', ['style' => 'width: 500px']);
                            echo $this->Form->control('last_name', ['style' => 'width: 500px']);

                            ?>

                            <?= $this->Form->label('access_role', 'Access Role') ?>
                            <?= $this->Form->select('access_role', [
                                'ADMIN' => 'ADMIN',
                                'CONSULTANT' => 'CONSULTANT',
                                'TRAINEE' => 'TRAINEE'
                            ], [
                                'style' => 'width: 500px',
                                'required' => true,
                                'empty' => '- Select Access Role -',
                            ])
                            ?>

                            <?php
                            echo $this->Form->control('password', ['style' => 'width: 500px']);
                            // Validate password by repeating it
                            echo $this->Form->control('password_confirm', [
                                'style' => 'width: 500px',
                                'type' => 'password',
                                'value' => '',  // Ensure password is not sending back to the client side
                                'label' => 'Retype Password',
                                'templateVars' => ['container_class' => 'column']
                            ]);
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
