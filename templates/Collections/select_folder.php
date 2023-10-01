<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $moncases
 */
?>

<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="content-box">
            <?= $this->Flash->render() ?>
            <h1>Select Collection Folder</h1>
            <ul class="bread-crumb clearfix">
                <li>Case List</li>
                <li>Save Case</li>
            </ul>
        </div>
    </div>
</section>


<div class="row">
    <div class="col-12 d-flex justify-content-center">
        <div class="collections form content">
            <?= $this->Html->link(__('Create a New Collection'), ['action' => 'create_collection'], ['class' => 'theme-btn style-one']) ?>
            <?= $this->Form->create() ?>
            <fieldset>
                <legend style="display:flex; justify-content:center; padding-top: 10px; padding-bottom: 10px;"><?= __('Or') ?></legend>
                <?php
                echo $this->Form->control('collection_name', [
                    'type' => 'select',
                    'options' => $name,
                    'label' => 'Select a Collection',
                ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Put the case in this collection'),['class'=>'btn btn-outline-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
