<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CollectionsMoncase $collectionsMoncase
 * @var \Cake\Collection\CollectionInterface|string[] $collections
 * @var \Cake\Collection\CollectionInterface|string[] $moncases
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Collections Moncases'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="collectionsMoncases form content">
            <?= $this->Form->create($collectionsMoncase) ?>
            <fieldset>
                <legend><?= __('Add Collections Moncase') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
