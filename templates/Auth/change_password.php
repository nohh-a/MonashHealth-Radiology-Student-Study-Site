<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->assign('title', 'Change User Password - Users');

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
                <h5 class="card-header text-center"><?= __('Change User Password') ?></h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <?php
                            echo $this->Form->control('password', [
                                'label' => 'New Password',
                                'value' => '',  // Ensure password is not sending back to the client side
                                'templateVars' => ['container_class' => 'column'],
                                'style' => 'width: 500px'
                            ]);
                            // Validate password by repeating it
                            echo $this->Form->control('password_confirm', [
                                'type' => 'password',
                                'value' => '',  // Ensure password is not sending back to the client side
                                'label' => 'Retype New Password',
                                'templateVars' => ['container_class' => 'column'],
                                'style' => 'width: 500px'
                            ]);
                            ?>
                        </div>

                    </div>

                </div>

                <div class="card-footer text-center">
                    <?=
                    $this->Form->button(__('Submit'), [
                        'class' => 'btn btn-primary btn-lg'
                    ])
                    ?>

                </div>

            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
