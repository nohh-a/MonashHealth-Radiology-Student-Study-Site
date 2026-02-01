<?php

$this->disableAutoLayout();


?>
<?= $this->Html->meta('icon') ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>

<?= $this->Html->css(['/css/plugins.css'])?>
<?= $this->Html->css(['/css/style.css'])?>
<?= $this->Html->css(['/css/custom.css'])?>
<?= $this->Html->css(['/css/dropzone.css'])?>

<?= $this->Html->css(['/css/datatables.min.css'])?>
<?= $this->Html->css(['/css/plugins.css'])?>
<?= $this->Html->css(['/css/bootstrap-switch.css'])?>
<?= $this->Html->css(['https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'])?>


<body data-icon="12">
<!-- Body Inner -->
<div class="body-inner">
    <section class="fullscreen text-center">
        <div class="container container-fullscreen">
            <div class="text-middle text-center">
                <i class="fa fa-exclamation-triangle fa-5x" style="color: #ffd530;"></i>
                <h1 class="text-uppercase text-lg">Maintenance mode</h1>
                <p class="lead">We are currently working on our website, we'll be back soon!</p>
            </div>
        </div>
        <div class="p-progress-bar-container title-up small">
            <div class="p-progress-bar" data-percent="95" data-delay="100" data-type="%" style="background-color:#ffd530">
                <div class="progress-title">DEVELOPMENT PROGRESS</div>
            </div>
        </div>
    </section>
</div> <!-- end: Body Inner -->
</body>


<?= $this->Html->script('/js/jquery.js'); ?>
<?= $this->Html->script('/js/plugins.js'); ?>
<?= $this->Html->script('/js/functions.js'); ?>

<?= $this->Html->script('/js/particles.js'); ?>
<?= $this->Html->script('/js/particles-dots.js'); ?>
<?= $this->Html->script('/js/particles-snow.js'); ?>
<?= $this->Html->script('/js/gmap3.min.js'); ?>
<?= $this->Html->script('/js/map-styles.js'); ?>
<?= $this->Html->script('/js/datatables.min.js'); ?>
<?= $this->Html->script('/js/dropzone.js'); ?>
<?= $this->Html->script('/js/bootstrap-switch.min.js'); ?>
