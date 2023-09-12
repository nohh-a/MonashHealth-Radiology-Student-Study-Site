<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Save $save
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $save->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $save->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Saves'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="saves form content">
            <?= $this->Form->create($save) ?>
            <fieldset>
                <legend><?= __('Edit Save') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('case_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
