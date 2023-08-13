<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Moncase $moncase
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Moncase'), ['action' => 'edit', $moncase->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Moncase'), ['action' => 'delete', $moncase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $moncase->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Moncases'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Moncase'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="moncases view content">
            <h3><?= h($moncase->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Case Type') ?></th>
                    <td><?= h($moncase->case_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contributer') ?></th>
                    <td><?= h($moncase->contributer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($moncase->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Max Marks') ?></th>
                    <td><?= $moncase->max_marks === null ? '' : $this->Number->format($moncase->max_marks) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rating') ?></th>
                    <td><?= $moncase->rating === null ? '' : $this->Number->format($moncase->rating) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($moncase->date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Accession No') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->accession_no)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('History') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->history)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Imaging') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->imaging)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Observation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->observation)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Intepretation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->intepretation)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Safety') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->safety)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Intrinsic Roles') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->intrinsic_roles)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Management') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->management)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Anatomy') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->anatomy)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Pathology') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->pathology)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Findings') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->findings)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Diagnosis') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->diagnosis)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Differential Diagnosis') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->differential_diagnosis)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Further Investigation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->further_investigation)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Teaching Points') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->teaching_points)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Seen By') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->seen_by)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Tags') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->tags)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Speciality') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($moncase->speciality)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
