<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Moncase> $moncases
 */

$this->assign('title', 'Select Case Type - Cases');
?>

<?= $this->Html->css('/webroot/css/animate.min.css') ?>
<?= $this->Html->css('/webroot/css/bootstrap.min.css') ?>
<?= $this->Html->css('/webroot/css/bootstrap-datepicker.css') ?>
<?= $this->Html->css('/webroot/css/fontawesome-all.css') ?>
<?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', ['integrity' => 'sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9', 'crossorigin' => 'anonymous']) ?>


<!-- Page Heading -->
<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Select Case Type</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'userlist'])?>">Case List</a></li>
                <li>New Case</li>
            </ul>
        </div>
    </div>
</section>

<div class = "row justify-content-center align-items-center">
    <div class="d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-md-6">
                    <div class ="card-body row justify-content-center align-items-center">
                            <div class="col-lg-6">

                                <div class="card mb-2 py-1 border-bottom-primary">
                                    <div class="card-body">
                                        <a href="<?= $this->Url->build(['controller' => 'Moncases', 'action' => 'addoscer']) ?>" class="btn btn-block">Oscer Case</a>
                                    </div>
                                </div>

                                <div class="card mb-2 py-1 border-bottom-secondary">

                                    <div class="card-body">
                                        <a href="<?= $this->Url->build(['controller' => 'Moncases', 'action' => 'addlong']) ?>" class="btn btn-block">Long Case</a>
                                    </div>
                                </div>

                                <div class="card mb-2 py-1 border-bottom-success">
                                    <div class="card-body">
                                        <a href="<?= $this->Url->build(['controller' => 'Moncases', 'action' => 'addmedium']) ?>" class="btn btn-block">Medium Case</a>
                                    </div>
                                </div>

                                <div class="card mb-2 py-1 border-bottom-info">
                                    <div class="card-body">
                                        <a href="<?= $this->Url->build(['controller' => 'Moncases', 'action' => 'addshort']) ?>" class="btn btn-block">Short Case</a>
                                    </div>
                                </div>

                                <div class="card mb-2 py-1 border-bottom-warning">
                                    <div class="card-body">
                                        <a href="<?= $this->Url->build(['controller' => 'Moncases', 'action' => 'addgeneral']) ?>" class="btn btn-block">General Case</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
    function goBack() {
        window.history.back();
    }
</script>
