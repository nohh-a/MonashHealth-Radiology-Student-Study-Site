<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Save $save
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Save'), ['action' => 'edit', $save->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Save'), ['action' => 'delete', $save->id], ['confirm' => __('Are you sure you want to delete # {0}?', $save->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Saves'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Save'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="saves view content">
            <h3><?= h($save->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $save->has('user') ? $this->Html->link($save->user->id, ['controller' => 'Users', 'action' => 'view', $save->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($save->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Case Id') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($save->case_id)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
