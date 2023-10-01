<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Collection'), ['action' => 'edit', $collection->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Collection'), ['action' => 'delete', $collection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $collection->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Collections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Collection'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="collections view content">
            <h3>Collection Name: <?= h($collection->name) ?></h3>

            <div class="related">
                <h4><?= __('Related Moncases') ?></h4>
                <?php if (!empty($collection->moncases)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Image Url') ?></th>
                            <th><?= __('Accession No') ?></th>
                            <th><?= __('Case Type') ?></th>
                            <th><?= __('Diagnosis') ?></th>
                            <th><?= __('Imaging') ?></th>
                            <th><?= __('Contributor') ?></th>
                            <th><?= __('Rating') ?></th>
                            <th><?= __('Date') ?></th>

                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($collection->moncases as $moncases) : ?>
                        <tr>
                            <td><?= h($moncases->image_url) ?></td>
                            <td><?= h($moncases->accession_no) ?></td>
                            <td><?= h($moncases->case_type) ?></td>
                            <td><?= h($moncases->diagnosis) ?></td>
                            <td><?= h($moncases->imaging) ?></td>
                            <td><?= h($moncases->contributor) ?></td>
                            <td><?= h($moncases->rating) ?></td>
                            <td><?= h($moncases->date) ?></td>

                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Moncases', 'action' => 'view', $moncases->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Moncases', 'action' => 'edit', $moncases->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Moncases', 'action' => 'delete', $moncases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $moncases->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
