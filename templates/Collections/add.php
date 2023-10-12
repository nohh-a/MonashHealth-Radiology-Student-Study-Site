<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $moncases
 */

$this->assign('title', 'Create Empty Folder - My Favorites');
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
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Create Folder</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'collections', 'action' => 'index'])?>">My Favourites</a></li>
                <li>Create folder</li>
            </ul>
        </div>
    </div>
</section>

<div class="container" style="padding-top: 40px;">
<div class="row">
    <div class="col-12 d-flex justify-content-center contact-section">
        <div class="collections form content form-inner" style="padding: 40px 50px 40px 50px;">
            <?= $this->Form->create($collection) ?>
            <fieldset>

                <?php
                echo $this->Form->control('name', [
                    'class' => 'form-control',
                    'required' => true,
                    'maxlength' => 50,
                    'placeholder' => 'Enter a name',
                    'label' => ['class' => 'required-label h5 center-style p-style', 'text' => 'Folder Name'],
                ]);
                //                echo $this->Form->control('user_id', ['options' => $users]);
                //                echo $this->Form->control('moncases._ids', ['options' => $moncases]);
                ?>

                <p class="p-style center-style">You will get a empty folder.</p>

                <!--must be here, cannot delete-->
                <div class="hidden-element">
                    <?= $this->Form->control('user_id', [
                    'value' => $userId,
                    'readonly' => true,
                    ])?>
                </div>

            </fieldset>
            <div class="center-style">
            <?= $this->Form->button(__('Create'),['class'=>'theme-btn style-one']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>
