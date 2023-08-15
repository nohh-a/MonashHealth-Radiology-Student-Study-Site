<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--===============================================================================================-->
    <?= $this->Html->meta('icon') ?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['/vendor/bootstrap-login/css/bootstrap.min.css'])?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['/font/fonts-login/font-awesome-4.7.0/css/font-awesome.min.css'])?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['/font/fonts-login/Linearicons-Free-v1.0.0/icon-font.min.css'])?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['/vendor/animate/animate.css'])?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['/vendor/css-hamburgers/hamburgers.min.css'])?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['/vendor/animsition/css/animsition.min.css'])?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['/vendor/select2/select2.min.css'])?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['/vendor/daterangepicker/daterangepicker.css'])?>
    <!--===============================================================================================-->
    <?= $this->Html->css(['util-login.css'])?>
    <?= $this->Html->css(['main-login.css'])?>
    <!--===============================================================================================-->


    <style>
        .wrap-input100 {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            width: 100%;
            height: 50px;
            position: relative;
            border: 1px solid #e6e6e6;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .message.error {
            color: red;
            background-color: #edd4d4;
            border-color: #e6c3c3;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
        }
    </style>



</head>
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form validate-form">

                <span class="login100-form-title p-b-43">
						Reset Password
					</span>
                <?= $this->Form->create() ?>
                <?= $this->Flash->render() ?>

                <fieldset>
                    <?php
                    echo $this->Form->control('password', [
                        'type' => 'password',
                        'label' => 'New Password',
                        'required' => true,
                        'autofocus' => true,
                        'value' => '',
                        'class' => 'input100, wrap-input100 validate-input'
                    ]);
                    echo $this->Form->control('password_confirm', [
                        'type' => 'password',
                        'label' => 'Repeat New Password',
                        'required' => true,
                        'value' => '',
                        'class' => 'input100, wrap-input100 validate-input'
                    ]);
                    ?>
                </fieldset>

                <?= $this->Form->button(__('Reset Password'), ['class' => 'login100-form-btn']) ?>

                <br>

                <?= $this->Html->link(__('Back to login'), ['controller' => 'Auth', 'action' => 'login'], ['class' => 'login100-form-btn']) ?>



            </div>

            <div class="login100-more" style="background-image: url(<?php echo $this->Url->image('login_side.png') ?>);">
            </div>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>










<!--===============================================================================================-->
<?= $this->Html->script('/vendor/jquery-login/jquery-3.2.1.min.js'); ?>
<!--===============================================================================================-->
<?= $this->Html->script('/vendor/animsition/js/animsition.min.js'); ?>
<!--===============================================================================================-->
<?= $this->Html->script('/vendor/bootstrap-login/js/popper.js'); ?>
<?= $this->Html->script('/vendor/bootstrap-login/js/bootstrap.min.js'); ?>
<!--===============================================================================================-->
<?= $this->Html->script('/vendor/select2/select2.min.js'); ?>
<!--===============================================================================================-->
<?= $this->Html->script('/vendor/daterangepicker/moment.min.js'); ?>
<?= $this->Html->script('/vendor/daterangepicker/daterangepicker.js'); ?>
<!--===============================================================================================-->
<?= $this->Html->script('/vendor/countdowntime/countdowntime.js'); ?>
<!--===============================================================================================-->
<?= $this->Html->script('main-login.js'); ?>

</body>
</html>
