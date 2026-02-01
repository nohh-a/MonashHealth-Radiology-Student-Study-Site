<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CollectionsMoncase> $collectionsMoncases
 */
?>
<div class="collectionsMoncases index content">
    <?= $this->Html->link(__('New Collections Moncase'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Collections Moncases') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('collection_id') ?></th>
                    <th><?= $this->Paginator->sort('moncase_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($collectionsMoncases as $collectionsMoncase): ?>
                <tr>
                    <td><?= $collectionsMoncase->has('collection') ? $this->Html->link($collectionsMoncase->collection->name, ['controller' => 'Collections', 'action' => 'view', $collectionsMoncase->collection->id]) : '' ?></td>
                    <td><?= $collectionsMoncase->has('moncase') ? $this->Html->link($collectionsMoncase->moncase->id, ['controller' => 'Moncases', 'action' => 'view', $collectionsMoncase->moncase->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $collectionsMoncase->collection_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $collectionsMoncase->collection_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $collectionsMoncase->collection_id], ['confirm' => __('Are you sure you want to delete # {0}?', $collectionsMoncase->collection_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
