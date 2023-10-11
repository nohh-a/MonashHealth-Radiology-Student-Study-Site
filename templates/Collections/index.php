<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Collection> $collections
 */


echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);

$this->assign('title', 'My Favorites');

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

    .container-fluid {
        padding-left: 0px;
        padding-right: 0px;
    }

    .table-responsive {
        width: 75%;
    }

</style>



<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="content-box">
            <h1>My Favorites</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'userlist'])?>">Case List</a></li>
                <li>My Favorites</li>
                <li>View Folders</li>
            </ul>
        </div>
    </div>
</section>

<div class="container">
    <div class="row align-items-center d-flex justify-content-center" data-animate="fadeInUp">
    </div>
    <?= $this->Flash->render() ?>
    <div class="container-fluid" data-animate="fadeInUp">
        <div class="moncases index content">
            <!-- Page Heading -->
            <div class="d-flex" style="justify-content: flex-end; width: 88%">
                <?= $this->Html->link(__('New Folder'), ['action' => 'add'], ['class' => 'theme-btn style-one']) ?>
            </div>
            <br>
            <div class="row d-flex justify-content-center">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th><?= h('Folder Name') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <?php foreach ($collections as $collection): ?>
                        <td style="text-align: center;"><?= h($collection->name) ?></td>

                        <td class="actions" style="text-align: center;">
                            <?=
                            $this->Html->link(__('View'),
                                [
                                    'action' => 'view', $collection->id
                                ],
                                [
                                    'class' => 'btn btn-outline-primary'
                                ]
                            )
                            ?>

                            <?= $this->Html->link(__('Change the folder name'),
                                ['action' => 'edit', $collection->id
                                ],
                                [
                                    'class' => 'btn btn-outline-secondary'
                                ]) ?>

                            <?=
                            $this->Form->postLink(__('Delete'),
                                [
                                    'action' => 'delete', $collection->id
                                ],
                                [
                                    'class' => 'btn btn-outline-danger',
                                    'confirm' => __(
                                        'Are you sure you want to delete # {0}?', $collection->name
                                    )
                                ]
                            )
                            ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            </div>
            <script>
                // $(document).ready(function() {
                //     $('#dataTable').DataTable();
                // });

            </script>
        </div>
    </div>
</div>

