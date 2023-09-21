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
            <h3><?= h($collection->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($collection->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $collection->has('user') ? $this->Html->link($collection->user->id, ['controller' => 'Users', 'action' => 'view', $collection->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($collection->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Moncases') ?></h4>
                <?php if (!empty($collection->moncases)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Image Url') ?></th>
                            <th><?= __('Accession No') ?></th>
                            <th><?= __('Case Type') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Imaging') ?></th>
                            <th><?= __('Diagnosis') ?></th>
                            <th><?= __('Differential Diagnosis') ?></th>
                            <th><?= __('Findings') ?></th>
                            <th><?= __('Teaching Points') ?></th>
                            <th><?= __('specialty') ?></th>
                            <th><?= __('History') ?></th>
                            <th><?= __('Max Marks') ?></th>
                            <th><?= __('Observation') ?></th>
                            <th><?= __('Intepretation') ?></th>
                            <th><?= __('Safety') ?></th>
                            <th><?= __('Intrinsic Roles') ?></th>
                            <th><?= __('Management') ?></th>
                            <th><?= __('Anatomy') ?></th>
                            <th><?= __('Pathology') ?></th>
                            <th><?= __('Further Investigation') ?></th>
                            <th><?= __('Seen By') ?></th>
                            <th><?= __('Tags') ?></th>
                            <th><?= __('Contributor') ?></th>
                            <th><?= __('Rating') ?></th>
                            <th><?= __('Author') ?></th>
                            <th><?= __('Archive Status') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($collection->moncases as $moncases) : ?>
                        <tr>
                            <td><?= h($moncases->id) ?></td>
                            <td><?= h($moncases->image_url) ?></td>
                            <td><?= h($moncases->accession_no) ?></td>
                            <td><?= h($moncases->case_type) ?></td>
                            <td><?= h($moncases->date) ?></td>
                            <td><?= h($moncases->imaging) ?></td>
                            <td><?= h($moncases->diagnosis) ?></td>
                            <td><?= h($moncases->differential_diagnosis) ?></td>
                            <td><?= h($moncases->findings) ?></td>
                            <td><?= h($moncases->teaching_points) ?></td>
                            <td><?= h($moncases->specialty) ?></td>
                            <td><?= h($moncases->history) ?></td>
                            <td><?= h($moncases->max_marks) ?></td>
                            <td><?= h($moncases->observation) ?></td>
                            <td><?= h($moncases->intepretation) ?></td>
                            <td><?= h($moncases->safety) ?></td>
                            <td><?= h($moncases->intrinsic_roles) ?></td>
                            <td><?= h($moncases->management) ?></td>
                            <td><?= h($moncases->anatomy) ?></td>
                            <td><?= h($moncases->pathology) ?></td>
                            <td><?= h($moncases->further_investigation) ?></td>
                            <td><?= h($moncases->seen_by) ?></td>
                            <td><?= h($moncases->tags) ?></td>
                            <td><?= h($moncases->contributor) ?></td>
                            <td><?= h($moncases->rating) ?></td>
                            <td><?= h($moncases->author) ?></td>
                            <td><?= h($moncases->archive_status) ?></td>
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
