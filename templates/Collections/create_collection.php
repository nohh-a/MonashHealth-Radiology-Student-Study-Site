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
            <?= $this->Form->create($collection) ?>
            <fieldset>
                <legend><?= __('Add Collection') ?></legend>
                <?php
                echo $this->Form->control('name');
//                echo $this->Form->control('user_id', ['options' => $users]);
//                echo $this->Form->control('moncases._ids', ['options' => $moncases]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
