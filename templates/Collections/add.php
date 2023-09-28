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
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Collections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="collections form content">
            <?= $this->Form->create($collection) ?>
            <fieldset>
                <legend><?= __('Add Collection') ?></legend>
                <?php
                $combinedOptions = [];

                foreach ($moncases as $id => $case) {
                    $accessionNo = isset($accession_no[$id]) ? $accession_no[$id] : '';
                    $diagnosisText = isset($diagnosis[$id]) ? $diagnosis[$id] : '';
                    $combinedOptions[$id] = $accessionNo . ' - ' . $diagnosisText;
                }

                echo $this->Form->control('name');
                //                echo $this->Form->control('user_id', ['options' => $users]);
                echo $this->Form->select(
                    'moncases._ids',
                    $combinedOptions,
                    ['multiple' => 'checkbox']
                );

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
