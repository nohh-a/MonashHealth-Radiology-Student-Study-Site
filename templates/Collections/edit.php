<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $moncases
 */

$this->assign('title', 'Change The Folder Name - My Favorites');

?>

<style>
    .p-style {
        padding: 10px 0px 10px 0px;
    }

    .center-style {
        display: flex;
        justify-content: center;
    }
</style>

<section class="page-title bg-color-1 text-center">
    <div class="auto-container p-style">

        <div class="col-md-8 d-flex" style="justify-content: start;">
            <td>
                <button class="btn btn-outline-primary" onclick="goBack()">
                    <?= $this->Html->tag('i', ' Back', ['class' => 'fas fa-arrow-left']) ?>
                </button>
            </td>
        </div>

        <div class="content-box">

            <h1><?= h($collection->name) ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'collections', 'action' => 'index'])?>">My Favourites</a></li>
                <li>Change The Folder Name</li>
            </ul>
        </div>
    </div>
</section>

<div class="container">

    <div class="row">

        <div class="col-12 d-flex justify-content-center contact-section">
            <div class="collections form content form-inner">

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
                        'label' => ['class' => 'required-label h5 center-style p-style', 'text' => 'New Folder Name'],
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

                <div class="row d-flex justify-content-around">
                    <div class="col-md-12 col-xs-12 text-center">
                        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-outline-primary']) ?>
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

<script>
    function goBack() {
        window.history.back();
    }
</script>
