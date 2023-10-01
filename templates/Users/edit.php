<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->assign('title', 'Edit - Users');

?>
<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Edit user</h1>
            <ul class="bread-crumb clearfix">
                <li>User Management</li>
                <li>Edit User</li>
            </ul>
        </div>
    </div>
</section>

<div class="row justify-content-center align-items-center" style="padding-left: 30px; padding-right: 30px;">
    <div class="col-md-8">

        <div class="moncases form content">

            <?= $this->Form->create($user, ['enctype' => 'multipart/form-data']) ?>
            <?= $this->Flash->render() ?>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <?php
                    echo $this->Form->control('username', [
                        'style' => 'width: 100%;',
                        'maxlength' => 20
                    ]);
                    echo $this->Form->control('email', [
                        'style' => 'width: 100%;',
                        'maxlength' => 20
                    ]);
                    echo $this->Form->control('first_name', [
                        'style' => 'width: 100%;',
                        'maxlength' => 20
                    ]);
                    echo $this->Form->control('last_name', [
                        'style' => 'width: 100%;',
                        'maxlength' => 20
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
                        'TRAINEE' => 'TRAINEE',
                        'CONSULTANT' => 'CONSULTANT',
                        'LIBRARY' => 'LIBRARY'
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
                <td>
                    <button class="btn btn-info" onclick="goBack()">Go Back</button>
                </td>
                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>

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
                    'class' => 'btn btn-outline-warning'
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


