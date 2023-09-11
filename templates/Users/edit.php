<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->assign('title', 'Edit - Users');

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
                <h5 class="card-header text-center"><?= __('Edit User') ?></h5>
                <?= $this->Flash->render() ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <?php
                            echo $this->Form->control('username', ['style' => 'width: 100%;']);
                            echo $this->Form->control('email', ['style' => 'width: 100%;']);
                            echo $this->Form->control('first_name', ['style' => 'width: 100%;']);
                            echo $this->Form->control('last_name', ['style' => 'width: 100%;']);
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
                                'empty' => '- Select Access Role -',
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
                                'empty' => '- Select Contributor -',
                                'required' => true
                            ])
                            ?>
                        </div>

                    </div>

                </div>
                <div class="card-footer text-center">
                    <?=
                    $this->Form->button(__('Submit'), [
                        'class' => 'btn btn-info'
                    ])
                    ?>

                    <?=
                    $this->Html->link(__('Change Password'), [
                        'controller' => 'Auth',
                        'action' => 'change-password',
                        $user->id
                    ],[
                        'class' => 'btn btn-warning'
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
                            'class' => 'btn btn-danger'
                        ]);
                    }
                    ?>



                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
