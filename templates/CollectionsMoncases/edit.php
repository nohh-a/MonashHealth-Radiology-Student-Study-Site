<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CollectionsMoncase $collectionsMoncase
 * @var string[]|\Cake\Collection\CollectionInterface $collections
 * @var string[]|\Cake\Collection\CollectionInterface $moncases
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $collectionsMoncase->collection_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $collectionsMoncase->collection_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Collections Moncases'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="collectionsMoncases form content">
            <?= $this->Form->create($collectionsMoncase) ?>
            <fieldset>
                <legend><?= __('Edit Collections Moncase') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
