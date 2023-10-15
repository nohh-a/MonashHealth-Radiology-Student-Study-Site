<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $moncases
 */

$this->assign('title', 'Create New Folder - My Favorites');
?>
<?= $this->Html->css('/webroot/css/valid-msg.css') ?>

<section class="page-title bg-color-1 text-center">
    <div class="auto-container">

        <div class="col-md-8 d-flex" style="justify-content: start;">
            <td>
                <button class="btn btn-outline-primary" onclick="goBack()">
                    <?= $this->Html->tag('i', ' Back', ['class' => 'fas fa-arrow-left']) ?>
                </button>
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
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'userlist'])?>">Case List</a></li>
                <li>Create Folder</li>
            </ul>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="collections form content">
                <?= $this->Form->create($collection) ?>
                <?= $this->Flash->render() ?>
                <fieldset>

                    <?php
                    echo $this->Form->control('name', [
                        'class' => 'form-control',
                        'required' => true,
                        'maxlength' => 50,
                        'placeholder' => 'Enter the name',
                        'label' => ['class' => 'required-label', 'text' => 'Folder Name'],
                    ]);
                    //                echo $this->Form->control('user_id', ['options' => $users]);
                    //                echo $this->Form->control('moncases._ids', ['options' => $moncases]);
                    ?>

                    <p>Current case will added to the folder automatically.</p>


                </fieldset>

                <?= $this->Form->button(__('Create'),['class'=>'btn btn-outline-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
