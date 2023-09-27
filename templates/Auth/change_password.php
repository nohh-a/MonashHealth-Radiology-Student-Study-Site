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
        <div class="content-box">
            <h1>Change Password</h1>
            <ul class="bread-crumb clearfix">
                <li>User Management</li>
                <li>Change Password</li>
            </ul>

        </div>
    </div>
</section>

<div class="row justify-content-center align-items-center">
    <div class="col-md-8">


        <div class="moncases form content">
            <?= $this->Form->create($user, ['enctype' => 'multipart/form-data']) ?>
            <?= $this->Flash->render() ?>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <?=$this->Form->control('password', [
                        'label' => 'New Password',
                        'value' => '',
                        // Ensure password is not sending back to the client side
                        'templateVars' => ['container_class' => 'column'],
                        'style' => 'width: 100%;'
                    ])?>

                    <?=$this->Form->control('password_confirm', [
                        'type' => 'password',
                        'value' => '',
                        // Ensure password is not sending back to the client side
                        'label' => 'Retype New Password',
                        'templateVars' => ['container_class' => 'column'],
                        'style' => 'width: 100%;'
                    ])?>

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
