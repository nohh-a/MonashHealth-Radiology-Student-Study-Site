<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->assign('title', 'Add - Users');
?>
<div class="row justify-content-center align-items-center">
    <div class="col-md-6">

        <div class="moncases form content">

            <?= $this->Form->create($user, ['enctype' => 'multipart/form-data']) ?>
            <?= $this->Flash->render() ?>
            <div class="card">
                <h5 class="card-header text-center"><?= __('Add New User') ?></h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <?php
                            echo $this->Form->control('username', [
                                'label' => 'Username * (For Login)',
                                'style' => 'width: 100%;', // Make input width 100%
                                'maxlength' => 20
                            ]);
                            echo $this->Form->control('email', [
                                'label' => 'Email *',
                                'style' => 'width: 100%;' // Make input width 100%
                            ]);
                            echo $this->Form->control('first_name', [
                                'label' => 'First Name *',
                                'style' => 'width: 100%;' // Make input width 100%
                            ]);
                            echo $this->Form->control('last_name', [
                                'label' => 'Last Name *',
                                'style' => 'width: 100%;' // Make input width 100%
                            ]);
                            ?>

                            <?= $this->Form->label('access_role', 'Access Role *') ?>
                            <?= $this->Form->select('access_role', [
                                'ADMIN' => 'ADMIN',
                                'CONSULTANT' => 'CONSULTANT',
                                'TRAINEE' => 'TRAINEE'
                            ], [
                                'style' => 'width: 100%;', // Make select width 100%
                                'class' => 'form-control',
                                'required' => true,
                                'empty' => '- Select Access Role -',
                            ])
                            ?>

                            <?= $this->Form->label('contributor', 'Contributor *') ?>
                            <?= $this->Form->select('contributor', [
                                'TRAINEE' => 'TRAINEE',
                                'CONSULTANT' => 'CONSULTANT',
                                'LIBRARY' => 'LIBRARY'
                            ], [
                                'label' => 'Contributor *',
                                'class' => 'form-control',
                                'style' => 'width: 100%;',
                                'empty' => '- Select Contributor -',
                                'required' => true
                            ])
                            ?>

                            <?php
                            echo $this->Form->control('password', [
                                'label' => 'Password *',
                                'style' => 'width: 100%;'
                            ]); // Make input width 100%
                            // Validate password by repeating it
                            echo $this->Form->control('password_confirm', [
                                'style' => 'width: 100%;', // Make input width 100%
                                'type' => 'password',
                                'value' => '',  // Ensure password is not sending back to the client side
                                'label' => 'Retype Password *',
                                'templateVars' => ['container_class' => 'column']
                            ]);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <td>
                        <button class="btn btn-info" onclick="goBack()">Go Back</button>
                    </td>
                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
