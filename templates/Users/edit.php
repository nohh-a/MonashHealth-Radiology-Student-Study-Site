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
                                'style' => 'width: 100%;',
                                'required' => true,
                                'empty' => '- Select Access Role -',
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
                            'hidden' => true
                    ]) ?>

<!--                    working -->
                    <?= $this->Form->postLink(__('Delete User'), [
                        'action' => 'delete', $user->id], [
                            'confirm' => __("Are you sure you want to delete this user?\n{0} {1} ({2})",
                                $user->first_name, $user->last_name, $user->email),
                        'class' => 'btn btn-danger']) ?>



                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
