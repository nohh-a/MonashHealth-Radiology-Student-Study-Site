<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $moncases
 */

$this->assign('title', 'Select Favorites Folder - My Favorites');

?>


<section class="page-title bg-color-1 text-center">
    <div class="auto-container">

        <div class="col-md-8">
            <td>
                <button class="btn btn-outline-primary" onclick="goBack()">
                    <?= $this->Html->tag('i', ' Back', ['class' => 'fas fa-arrow-left']) ?>
                </button>
            </td>
        </div>

        <div class="content-box">
            <?= $this->Flash->render() ?>
            <h1>Select Favorites Folder</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'userlist'])?>">Case List</a></li>
                <li>Select Favorites Folder</li>
            </ul>
        </div>
    </div>
</section>


<div class="row">

    <div class="col-12 d-flex justify-content-center">
        <div class="collections form content">
            <?= $this->Html->link(__('Create a New Folder'), ['action' => 'create_collection', $id], ['class' => 'theme-btn style-one']) ?>
            <?= $this->Form->create() ?>
            <fieldset>
                <legend style="display:flex; justify-content:center; padding-top: 10px; padding-bottom: 10px;"><?= __('Or') ?></legend>
                <?php
                echo $this->Form->control('collection_name', [
                    'type' => 'select',
                    'options' => $name,
                    'label' => 'Select a Folder: ',
                ]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Put the case in this folder'),['class'=>'btn btn-outline-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>
