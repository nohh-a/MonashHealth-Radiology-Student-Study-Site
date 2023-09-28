<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $moncases
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $collection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $collection->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Collections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="collections form content">
            <?= $this->Form->create($collection) ?>
            <fieldset>
                <legend><?= __('Edit Collection') ?></legend>
                <?php
                $combinedOptions = [];

                foreach ($moncases as $id => $case) {
                    $accessionNo = isset($accession_no[$id]) ? $accession_no[$id] : '';
                    $diagnosisText = isset($diagnosis[$id]) ? $diagnosis[$id] : '';
                    $combinedOptions[$id] = $accessionNo . ' - ' . $diagnosisText;
                }

                echo $this->Form->control('name');
//                echo $this->Form->control('user_id', ['options' => $users]);

                ?>
                <dev>
                    <label>Select Moncases:</label>
                    <?= $this->Form->select('moncases._ids',
                        $combinedOptions,
                        [
                            'multiple' => 'checkbox',
                        ]
                    )?>
                </dev>


            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
