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
    <title>Login</title>
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
            padding: 0.6rem 1rem;
        }

        .message.error {
            color: red;
            background-color: #edd4d4;
            border-color: #e6c3c3;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
        }

        .message.success {
            background: #e3fcec;
            color: #1f9d55;
            border-color: #51d88a;
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
						Login
					</span>
                <?= $this->Form->create(null, ['url' => ['controller' => 'Auth', 'action' => 'login']]) ?>

                <?= $this->Flash->render() ?>

                <fieldset>
                    <?= $this->Form->control('username', [
                        'required' => true,
                        'autofocus' => true,
                        'placeholder' => 'Your Username',
                        'class' => 'input100, wrap-input100 validate-input'
                    ]) ?>

                    <div style="position: relative;">
                        <?php echo $this->Form->control('password', [
                            'label' => 'Password (including upper and lower letters, numbers and special symbols)',
                            'class' => 'input100, wrap-input100 validate-input',
                            'type' => 'password', // The initial type is "password", hiding the password
                            'id' => 'password-input',
                            'placeholder' => 'At least 6 characters',
                            'required' => true,
                            'value' => '', // Ensure password is not sending back to the client side
                        ]); ?>

                        <span id="password-toggle" style="position: absolute; top: 60px; right: 15px; cursor: pointer;">
                            <i class="fa fa-eye-slash" id="eye-icon" aria-hidden="true"></i>
                        </span>

                    </div>

                </fieldset>

                <?= $this->Form->submit(__('Login'), ['class' => 'login100-form-btn']) ?>

                <br>

                <?= $this->Html->link(__('Forget Password?'), ['controller' => 'Auth', 'action' => 'forgetPassword'], ['class' => 'login100-form-btn']) ?>

                <br>


            </div>

            <div class="login100-more" style="background-image: url(<?php echo $this->Url->image('login_side.png') ?>);">
            </div>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>





<script>

    const passwordInput = document.getElementById('password-input');
    const eyeIcon = document.getElementById('eye-icon');

    // Switch the type of password input box
    eyeIcon.addEventListener('click', function () {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text'; // show
            eyeIcon.className = 'fa fa-eye'; // switch icon to open eye
        } else {
            passwordInput.type = 'password'; // hide
            eyeIcon.className = 'fa fa-eye-slash'; // switch icon to close eye
        }
    });
</script>




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
