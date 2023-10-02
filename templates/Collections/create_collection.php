<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $moncases
 */
?>
<?= $this->Html->css('/webroot/css/valid-msg.css') ?>

<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="content-box">
            <h1>My Collection</h1>
            <ul class="bread-crumb clearfix">
                <li>My Collection</li>
                <li>Create Collection</li>
            </ul>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="collections form content">
                <?= $this->Form->create($collection) ?>
                <?= $this->Flash->render() ?>
                <fieldset>

                    <?php
                    echo $this->Form->control('name', [
                        'class' => 'form-control',
                        'required' => true,
                        'maxlength' => 50,
                        'placeholder' => 'Enter the name',
                        'label' => ['class' => 'required-label', 'text' => 'Collection Name'],
                    ]);
                    //                echo $this->Form->control('user_id', ['options' => $users]);
                    //                echo $this->Form->control('moncases._ids', ['options' => $moncases]);
                    ?>

                    <p>Current case will added the collection automatically.</p>


                </fieldset>
                <td>
                    <button class="btn btn-info" onclick="goBack()">Go Back</button>
                </td>
                <script>
                    function goBack() {
                        window.history.back();
                    }
                </script>

                <?= $this->Form->button(__('Create'),['class'=>'btn btn-outline-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
