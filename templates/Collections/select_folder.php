<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $moncases
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="collections form content">
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('select Collection') ?></legend>
                <?php
                echo $this->Form->control('collection_name', [
                    'type' => 'select',
                    'options' => $name,
                    'label' => 'Select a Collection',
                ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Put the case in this collection')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
