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
            <?= $this->Html->link(__('List Moncases'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="moncases form content">
            <?= $this->Form->create($moncase) ?>
            <fieldset>
                <legend><?= __('Add Moncase') ?></legend>
                <?php
                    echo $this->Form->control('accession_no');
                    echo $this->Form->control('case_type');
                    echo $this->Form->control('date');
                    echo $this->Form->control('history');
                    echo $this->Form->control('imaging');
                    echo $this->Form->control('max_marks');
                    echo $this->Form->control('observation');
                    echo $this->Form->control('intepretation');
                    echo $this->Form->control('safety');
                    echo $this->Form->control('intrinsic_roles');
                    echo $this->Form->control('management');
                    echo $this->Form->control('anatomy');
                    echo $this->Form->control('pathology');
                    echo $this->Form->control('findings');
                    echo $this->Form->control('diagnosis');
                    echo $this->Form->control('differential_diagnosis');
                    echo $this->Form->control('further_investigation');
                    echo $this->Form->control('teaching_points');
                    echo $this->Form->control('seen_by');
                    echo $this->Form->control('tags');
                    echo $this->Form->control('contributer');
                    echo $this->Form->control('speciality');
                    echo $this->Form->control('rating');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
