<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->assign('title', 'Edit - Users');

?>
<section class="page-title bg-color-1 text-center">
    <div class="auto-container">
        <div class="content-box">
            <h1>Edit user</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'index'])?>">User Management</a></li>
                <li>Edit User</li>
            </ul>
        </div>
    </div>
</section>

<div class="row justify-content-center align-items-center" style="padding-left: 30px; padding-right: 30px;">
    <div class="col-md-8">

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

                    <?= $this->Form->label('access_role', 'Access Role') ?>
                    <?= $this->Form->select('access_role', [
                        'ADMIN' => 'ADMIN',
                        'CONSULTANT' => 'CONSULTANT',
                        'TRAINEE' => 'TRAINEE'
                    ], [
                        'class' => 'form-control',
                        'style' => 'width: 100%;',
                        'required' => true,
                        'empty' => 'Select Access Role',
                    ])
                    ?>
                    <?= $this->Form->label('contributor', 'Contributor') ?>
                    <?= $this->Form->select('contributor', [
                        'LIBRARY' => 'LIBRARY',
                        'CONSULTANT' => 'CONSULTANT',
                        'TRAINEE' => 'TRAINEE',

                    ], [
                        'class' => 'form-control',
                        'style' => 'width: 100%;',
                        'empty' => 'Select Contributor',
                        'required' => true
                    ])
                    ?>

            </div>

            </div>
            <div class="row" style="padding-bottom: 20px; padding-top: 20px;">
            <div class="col-md-6 mx-auto text-center">

                <?=
                $this->Form->button(__('Save'), [
                    'class' => 'btn btn-outline-primary'
                ])
                ?>

                <?=
                $this->Html->link(__('Change Password'), [
                    'controller' => 'Auth',
                    'action' => 'change-password',
                    $user->id
                ],[
                    'class' => 'btn btn-outline-secondary'
                ])
                ?>

                <!--                    It will have a error when first delete code delete,-->
                <!--                    so, I hidden it-->
                <?= $this->Form->postLink(__('Delete User'), [
                    'action' => 'delete', $user->id], [
                    'confirm' => __("Are you sure you want to delete this user? {0} {1} ({2})",
                        $user->first_name, $user->last_name, $user->email),
                    'class' => 'btn btn-danger',
                    'hidden' => true //here
                ]) ?>

                <!--                    working one-->

                <?php
                if ($user->id !== '25d2e98e-ffd2-4649-bd1c-3fb05ac9a217') {
                    echo $this->Form->postLink(__('Delete User'), [
                        'action' => 'delete', $user->id], [
                        'confirm' => __("Are you sure you want to delete this user?\n{0} {1} ({2})",
                            $user->first_name, $user->last_name, $user->email),
                        'class' => 'btn btn-outline-danger'
                    ]);
                }
                ?>


            </div>
            </div>
            <?= $this->Form->end() ?>

        </div>
    </div>
</div>


