<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Moncase> $moncases
 */
?>
<div class="moncases index content">
    <?= $this->Html->link(__('New Moncase'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Moncases') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('case_type') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('max_marks') ?></th>
                    <th><?= $this->Paginator->sort('contributer') ?></th>
                    <th><?= $this->Paginator->sort('rating') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($moncases as $moncase): ?>
                <tr>
                    <td><?= $this->Number->format($moncase->id) ?></td>
                    <td><?= h($moncase->case_type) ?></td>
                    <td><?= h($moncase->date) ?></td>
                    <td><?= $moncase->max_marks === null ? '' : $this->Number->format($moncase->max_marks) ?></td>
                    <td><?= h($moncase->contributer) ?></td>
                    <td><?= $moncase->rating === null ? '' : $this->Number->format($moncase->rating) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $moncase->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $moncase->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $moncase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $moncase->id)]) ?>
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
