<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $moncases
 */
?>
<div class="row">

    <div class="column-responsive column-80">
        <div class="collections form content">
            <?= $this->Form->create($collection) ?>
            <?= $this->Flash->render() ?>
            <fieldset>
                <legend><?= __('Add Collection') ?></legend>
                <p>Current case will added the collection automatically.</p>
                <?php
                echo $this->Form->control('name');
//                echo $this->Form->control('user_id', ['options' => $users]);
//                echo $this->Form->control('moncases._ids', ['options' => $moncases]);
                ?>
            </fieldset>
            <td>
                <button class="btn btn-info" onclick="goBack()">Go Back</button>
            </td>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
