<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->assign('title', 'Change User Password - Users');

?>

<section class="page-title bg-color-1 text-center">
    <div class="auto-container">

        <div class="content-box">
            <h1>Change Password</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'index'])?>">User Management</a></li>
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
            <div class="row contact-section" style="padding-bottom: 0px;">

                <div class="col-md-6 mx-auto form-inner">
                    <div style="position: relative;">
                        <?php echo $this->Form->control('password', [
                            'label' => ['class' => 'required-label', 'text' => 'Password'],
                            'style' => 'width: 100%;',
                            'placeholder' => 'At least 6 characters',
                            'type' => 'password', // The initial type is "password", hiding the password
                            'id' => 'password-input',
                            'autofocus' => true,
                            'required' => true,
                            'value' => '', // Ensure password is not sending back to the client side
                        ]); ?>

                        <p>(Including upper and lower letters, numbers and special symbols)</p>

                        <span id="password-toggle" style="position: absolute; top: 50px; right: 15px; cursor: pointer;">

                            <i class="fa fa-eye-slash" id="eye-icon" aria-hidden="true"></i>

                        </span>

                    </div>

                    <?php
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
                        'class' => 'theme-btn style-one',
                    ])
                    ?>

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
