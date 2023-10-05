<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->assign('title', 'Change User Password - Users');

?>

<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="col-md-8">
            <td>
                <button class="btn btn-info" onclick="goBack()">Go Back</button>
            </td>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
        </div>

        <div class="content-box">
            <h1>Change Password</h1>
            <ul class="bread-crumb clearfix">
                <li>User Management</li>
                <li>Change Password</li>
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
                    echo $this->Form->control('password', [
                        'style' => 'width: 100%;',
                        'label' => ['class' => 'required-label', 'text' => 'New Password (including upper and lower letters, numbers and special symbols)'],
                        'value' => '', // Ensure password is not sending back to the client side
                        'placeholder' => 'At least 6 characters'
                    ]);

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

            <div class="row" style="padding-bottom: 20px; padding-top: 20px;">
                <div class="col-md-6 mx-auto text-center">

                    <?=
                    $this->Form->button(__('Save'), [
                        'class' => 'btn btn-outline-primary',
                    ])
                    ?>

                </div>
            </div>

            <?= $this->Form->end() ?>

        </div>

    </div>

</div>
