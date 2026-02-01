<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CollectionsMoncase $collectionsMoncase
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Collections Moncase'), ['action' => 'edit', $collectionsMoncase->collection_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Collections Moncase'), ['action' => 'delete', $collectionsMoncase->collection_id], ['confirm' => __('Are you sure you want to delete # {0}?', $collectionsMoncase->collection_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Collections Moncases'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Collections Moncase'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="collectionsMoncases view content">
            <h3><?= h($collectionsMoncase->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Collection') ?></th>
                    <td><?= $collectionsMoncase->has('collection') ? $this->Html->link($collectionsMoncase->collection->name, ['controller' => 'Collections', 'action' => 'view', $collectionsMoncase->collection->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Moncase') ?></th>
                    <td><?= $collectionsMoncase->has('moncase') ? $this->Html->link($collectionsMoncase->moncase->id, ['controller' => 'Moncases', 'action' => 'view', $collectionsMoncase->moncase->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
