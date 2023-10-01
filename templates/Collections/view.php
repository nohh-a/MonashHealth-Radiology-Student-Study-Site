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
            <h1>Collection: <?= h($collection->name) ?></h1>
            <ul class="bread-crumb clearfix">
                    <li>My Collection</li>
                <li>View Collection</li>
            </ul>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="heading"><?= __('Actions') ?></h3>
            <?= $this->Html->link(__('Edit Collection'), ['action' => 'edit', $collection->id], ['class' => 'btn btn-outline-warning']) ?>
            <?= $this->Form->postLink(__('Delete Collection'), ['action' => 'delete', $collection->id], ['confirm' => __('Are you sure you want to delete your collection "{0}"?', $collection->name), 'class' => 'btn btn-outline-danger']) ?>
            <?= $this->Html->link(__('New Collection'), ['action' => 'add'], ['class' => 'btn btn-outline-primary']) ?>
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
                                <td><?= h($moncases->accession_no) ?></td>
                                <td><?= h($moncases->case_type) ?></td>
                                <td><?= h($moncases->date) ?></td>
                                <td><?= h($moncases->diagnosis) ?></td>
                                <td><?= h($moncases->author) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Moncases', 'action' => 'view', $moncases->id],['class'=>'btn btn-outline-primary']) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Moncases', 'action' => 'edit', $moncases->id], ['class'=>'btn btn-outline-warning']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Moncases', 'action' => 'delete', $moncases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $moncases->id), 'class'=>'btn btn-outline-danger']) ?>
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
