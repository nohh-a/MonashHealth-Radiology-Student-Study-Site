<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $moncases
 */

$this->assign('title', 'Change The Folder Name - My Favorites');

?>

<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">

        <div class="content-box">
            <h1><?= h($collection->name) ?></h1>
            <ul class="bread-crumb clearfix">
                <li>My Favorites</li>
                <li>Change The Folder Name</li>
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
                        'label' => ['class' => 'required-label', 'text' => 'New Folder Name'],
                    ]);
                    //                echo $this->Form->control('user_id', ['options' => $users]);

                    ?>
                    <dev>
<!--                        <label>Select Cases:</label>-->
<!--                        --><?php //= $this->Form->select('moncases._ids',
//                            $combinedOptions,
//                            [
//                                'multiple' => 'checkbox',
//                                'class' => 'text-center',
//                            ]
//                        )?>
                    </dev>


                </fieldset>

                <br>

                <div class="row">
                    <div class="col-md-6 col-xs-6 text-center">
                        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-outline-primary']) ?>
                    </div>
                    <br><br>
                    <div class="col-md-6 col-xs-6 text-center">
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $collection->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $collection->id), 'class' => 'btn btn-outline-danger']
                        ) ?>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
