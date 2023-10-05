<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Collection $collection
 */
?>

<style>
    /* Style the table header */
    table th {
        background-color: #576ec2;
        font-weight: bold;
        text-align: center;
        color: #ececf8;
    }

    /* Style the table rows */
    table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    /* Add a hover effect to the table rows */
    table tr:hover {
        background-color: rgba(6, 152, 225, 0.16);
    }

    /* Style the "Actions" column */
    .actions {
        white-space: nowrap;
    }

    .body {
        font-family: 'Poppins', sans-serif;
    }

    /* mobile */
    @media (max-width: 768px) {

        table th, table td {
            font-size: 14px;

        }
    }


</style>

<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">

        <div class="content-box">
            <h1><?= h($collection->name) ?></h1>
            <ul class="bread-crumb clearfix">
                    <li>My Collection</li>
                <li>View Collection</li>
            </ul>
        </div>
    </div>
</section>

<div class="container">
    <?= $this->Flash->render() ?>
    <div class="row">
        <div class="col-6">
            <h3 class="heading"><?= __('Actions') ?></h3>

            <td>
                <button class="btn btn-info" onclick="goBack()">Go Back</button>
            </td>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>

            <?= $this->Html->link(__('Change Folder Name'), ['action' => 'edit', $collection->id], ['class' => 'btn btn-outline-warning']) ?>
            <?= $this->Form->postLink(__('Delete This Folder'), ['action' => 'delete', $collection->id], ['confirm' => __('Are you sure you want to delete your collection "{0}"?', $collection->name), 'class' => 'btn btn-outline-danger']) ?>
            <?= $this->Html->link(__('New Folder'), ['action' => 'add'], ['class' => 'btn btn-outline-primary']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-12 d-flex justify-content-center" style="padding-top: 10px;">
            <?php if (!empty($collection->moncases)) : ?>
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= __('Image') ?></th>
                            <th><?= __('Accession No') ?></th>
                            <th><?= __('Case Type') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Diagnosis') ?></th>
                            <th><?= __('Author') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                   <tbody>
                        <?php foreach ($collection->moncases as $moncases) : ?>
                            <tr>
                                <td> <img src="<?= $this->Url->image($moncases -> image_url, ['alt'=>'photo']) ?>" style=" height: 142px; max-width: fit-content;"></td>
                                <td style="text-align: center;"><?= h($moncases->accession_no) ?></td>
                                <td style="text-align: center;"><?= h($moncases->case_type) ?></td>
                                <td style="text-align: center;"><?= h($moncases->date) ?></td>
                                <td style="text-align: center;"><?= h($moncases->diagnosis) ?></td>
                                <td style="text-align: center;"><?= h($moncases->author) ?></td>
                                <td class="actions" style="text-align: center;">
                                    <!--going different view page based access role-->
                                    <?php if ($access_role == 'ADMIN'): ?>
                                        <?= $this->Html->link(__('View'), ['controller' => 'Moncases', 'action' => 'view', $moncases->id],['class'=>'btn btn-outline-primary']) ?>
                                    <?php else: ?>
                                        <?= $this->Html->link(__('View'), ['controller' => 'Moncases', 'action' => 'view_notadmin', $moncases->id],['class'=>'btn btn-outline-primary']) ?>
                                    <?php endif; ?>

                                    <!--user just can edit their own cases, admin can edit anyone-->
                                    <?php if ($access_role == 'ADMIN'): ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Moncases', 'action' => 'edit', $moncases->id], ['class'=>'btn btn-outline-warning']) ?>
                                    <?php else: ?>
                                        <?php if ($author == $moncases->author): ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Moncases', 'action' => 'edit', $moncases->id], ['class'=>'btn btn-outline-warning']) ?>
                                        <?php else: ?>

                                        <?php endif; ?>

                                    <?php endif; ?>

                                    <?= $this->Form->postLink(__('Remove'), ['action' => 'deletecaseinfoldder', $moncases->id, $collection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $moncases->diagnosis), 'class'=>'btn btn-outline-danger']) ?>


                                </td>
                            </tr>
                        <?php endforeach; ?>
                     </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
