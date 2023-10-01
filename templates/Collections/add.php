<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $moncases
 */
?>
<?= $this->Html->css('/webroot/css/valid-msg.css') ?>

<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="content-box">
            <h1>My Collection</h1>
            <ul class="bread-crumb clearfix">
                <li>My Collection</li>
                <li>Create Collection</li>
            </ul>
        </div>
    </div>
</section>

<div class="container">
<div class="row">
    <div class="col-12 d-flex justify-content-center">
        <div class="collections form content">
            <?= $this->Form->create($collection) ?>
            <fieldset>
                <legend><?= __('Add Collection') ?></legend>
                <?php
                $combinedOptions = [];

                foreach ($moncases as $id => $case) {
                    $accessionNo = isset($accession_no[$id]) ? $accession_no[$id] : '';
                    $diagnosisText = isset($diagnosis[$id]) ? $diagnosis[$id] : '';
                    $combinedOptions[$id] = $accessionNo . ' - ' . $diagnosisText;
                }

                echo $this->Form->control('name');

                ?>
                <div>
                    <label>Select Moncases:</label>
                    <?= $this->Form->select('moncases._ids',
                        $combinedOptions,
                        [
                            'multiple' => 'checkbox',
                        ]
                    )?>
                </div>

                <div class="hidden-element">

                    <?= $this->Form->control('user_id', [
                    'value' => $userId,
                    'readonly' => true,
                    ])?>
                </div>

            </fieldset>
            <td>
                <button class="btn btn-info" onclick="goBack()">Go Back</button>
            </td>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>

            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-outline-po']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
