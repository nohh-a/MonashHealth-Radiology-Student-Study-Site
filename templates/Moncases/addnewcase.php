<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Moncase> $moncases
 */
?>

<?= $this->Html->css('/webroot/css/animate.min.css') ?>
<?= $this->Html->css('/webroot/css/bootstrap.min.css') ?>
<?= $this->Html->css('/webroot/css/bootstrap-datepicker.css') ?>
<?= $this->Html->css('/webroot/css/fontawesome-all.css') ?>
<?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', ['integrity' => 'sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9', 'crossorigin' => 'anonymous']) ?>



<div class = "row justify-content-center align-items-center">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-button active" href="<?= $this->Url->build(['controller'=>'Moncases','action'=> 'userlist']) ?>"> <?= $this->Html->link(__('Home'), ['action' => 'userlist'], ['class' => 'btn btn-primary']) ?></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class = "col-md-8">
        <div class = "card">
            <h5 class="card-header text-center"><?= __('Select Case Type') ?></h5>
            <div class ="card-body row justify-content-center align-items-center">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style= "height: 50px;">
                    <!--<option selected>Choose a case</option>-->
                    <option value="1">Oscer</option>
                    <option value="2">Long Case</option>
                    <option value="3">Medium Case</option>
                    <option value="4">Short Case</option>
                    <option value="5">General Case</option>
                </select>
            </div>
        </div>
        <br><br>
        <?= $this->Html->link(__('Back'), ['action' => 'userlist'], ['class' => 'btn btn-secondary']) ?>
        <button type="button" class="btn btn-primary float-right" onClick = "selectionpick()">Submit</button>
    </div>

</div>

<script type="text/javascript">
    function selectionpick(){
        var selectElement = document.querySelector('.form-select'); // select the select element
        var selectedValue = selectElement.value; // get the value of the selected option

        if (selectedValue == "1"){
            window.location.href =  "<?= $this->Url->build(['controller' => 'Moncases', 'action' => 'addoscer']) ?>";
        }
        if (selectedValue == "2"){
            window.location.href =  "<?= $this->Url->build(['controller' => 'Moncases', 'action' => 'addlong']) ?>";
        }
        if (selectedValue == "3"){
            window.location.href =  "<?= $this->Url->build(['controller' => 'Moncases', 'action' => 'addmedium']) ?>";
        }
        if (selectedValue == "4"){
            window.location.href =  "<?= $this->Url->build(['controller' => 'Moncases', 'action' => 'addshort']) ?>";
        }
        if (selectedValue == "5"){
            window.location.href =  "<?= $this->Url->build(['controller' => 'Moncases', 'action' => 'addgeneral']) ?>";
        }

    }
</script>

<?= $this->Html->script(
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js',
    ['integrity' => 'sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm', 'crossorigin' => 'anonymous']
) ?>
