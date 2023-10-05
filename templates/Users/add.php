<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->assign('title', 'Create New User - Users');
?>

<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="col-md-8">
            <td>
                <button class="btn btn-info" onclick="goBack()">Go Back</button>
            </td>
        </div>
        <div class="content-box">
            <h1>Create New User</h1>
            <ul class="bread-crumb clearfix">
                <li>User Management</li>
                <li>New User</li>
            </ul>
        </div>
    </div>
</section>


<div class="row justify-content-center align-items-center" style="padding: 25px;">
    <div class="col-md-6">

        <div class="moncases form content">


            <?= $this->Flash->render() ?>
                    <div class="row">
                        <div class="col-md-6 mx-auto">

                            <?= $this->Form->create($user, ['enctype' => 'multipart/form-data']) ?>
                            <?php
                            echo $this->Form->control('username', [
                                'label' => ['class' => 'required-label', 'text' => 'Username'],
                                'style' => 'width: 100%;', // Make input width 100%
                                'maxlength' => 20,
                                'placeholder' => 'The username for login used'
                            ]);
                            echo $this->Form->control('email', [
                                'label' => ['class' => 'required-label', 'text' => 'Email'],
                                'style' => 'width: 100%;', // Make input width 100%
                                'placeholder' => 'e.g. xxx@xxx.com'
                            ]);
                            echo $this->Form->control('first_name', [
                                'label' => ['class' => 'required-label', 'text' => 'First Name'],
                                'style' => 'width: 100%;', // Make input width 100%
                                'maxlength' => 20,
                                'placeholder' => 'e.g. Roger'
                            ]);
                            echo $this->Form->control('last_name', [
                                'label' => ['class' => 'required-label', 'text' => 'Last Name'],
                                'style' => 'width: 100%;', // Make input width 100%
                                'maxlength' => 20,
                                'placeholder' => 'e.g. Wang'
                            ]);
                            ?>

                            <?= $this->Form->label('access_role', 'Access Role', [
                                'class' => 'required-label',
                            ]) ?>
                            <?= $this->Form->select('access_role', [
                                'ADMIN' => 'ADMIN',
                                'CONSULTANT' => 'CONSULTANT',
                                'TRAINEE' => 'TRAINEE'
                            ], [
                                'style' => 'width: 100%;', // Make select width 100%
                                'class' => 'form-control',
                                'required' => true,
                                'empty' => 'Select Access Role',

                            ])
                            ?>

                            <?= $this->Form->label('contributor', 'Contributor', [
                                'class' => 'required-label',
                            ]) ?>
                            <?= $this->Form->select('contributor', [
                                'LIBRARY' => 'LIBRARY',
                                'CONSULTANT' => 'CONSULTANT',
                                'TRAINEE' => 'TRAINEE',

                            ], [
                                'label' => ['class' => 'required-label', 'text' => 'Contributor'],
                                'class' => 'form-control',
                                'style' => 'width: 100%;',
                                'empty' => 'Select Contributor',
                                'required' => true
                            ])
                            ?>

                            <?php
                            echo $this->Form->control('password', [
                                'label' => ['class' => 'required-label', 'text' => 'Password (including upper and lower letters, numbers and special symbols)'],
                                'style' => 'width: 100%;',
                                'placeholder' => 'At least 6 characters'
                            ]); // Make input width 100%
                            // Validate password by repeating it
                            echo $this->Form->control('password_confirm', [
                                'style' => 'width: 100%;', // Make input width 100%
                                'type' => 'password',
                                'value' => '',  // Ensure password is not sending back to the client side
                                'label' => ['class' => 'required-label', 'text' => 'Retype Password'],
                                'templateVars' => ['container_class' => 'column'],
                                'placeholder' => 'Retype Password'
                            ]);
                            ?>
                        </div>
                    </div>
            <div class="row justify-content-center align-items-center" style="padding-top: 20px;">
                <?= $this->Form->button(__('Create'), ['class' => 'theme-btn style-one']) ?>
            </div>
        </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>
