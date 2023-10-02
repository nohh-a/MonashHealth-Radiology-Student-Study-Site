<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $moncases
 */
?>


<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="col-md-8">
            <td>
                <button class="btn btn-info" onclick="goBack()">Go Back</button>
            </td>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
        </div>

        <div class="content-box">
            <h1>Create Folder</h1>
            <ul class="bread-crumb clearfix">
                <li>My Favorites</li>
                <li>Create folder</li>
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

                <?php
                $combinedOptions = [];
                foreach ($moncases as $id => $case) {
                    $accessionNo = isset($accession_no[$id]) ? $accession_no[$id] : '';
                    $diagnosisText = isset($diagnosis[$id]) ? $diagnosis[$id] : '';
                    $combinedOptions[$id] = $accessionNo . ' - ' . $diagnosisText;
                }

                echo $this->Form->control('name', [
                    'class' => 'form-control',
                    'required' => true,
                    'maxlength' => 50,
                    'placeholder' => 'Enter the name',
                    'label' => ['class' => 'required-label', 'text' => 'Folder Name'],
                ]);
                ?>
                <div class="text-center">
                    <label>Select Cases:</label>
                    <?= $this->Form->select('moncases._ids',
                        $combinedOptions,
                        [
                            'multiple' => 'checkbox',
                            'class' => 'text-center',
                        ]
                    )?>
                </div>

                <!--must be here, cannot delete-->
                <div class="hidden-element">
                    <?= $this->Form->control('user_id', [
                    'value' => $userId,
                    'readonly' => true,
                    ])?>
                </div>

            </fieldset>

            <?= $this->Form->button(__('Create'),['class'=>'btn btn-outline-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
