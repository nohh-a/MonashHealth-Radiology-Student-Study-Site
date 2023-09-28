<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Collection> $collections
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css',['block'=>true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js',['block'=>true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js',['block'=>true]);

?>
<style>
    /* Style the table header */
    table th {
        background-color: #466bd7;
        font-weight: bold;
        text-align: center;
    }

    /* Style the table rows */
    table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    /* Add a hover effect to the table rows */
    table tr:hover {
        background-color: rgba(6, 152, 225, 0.16);
    }

    /* Style the "Actions" column */
    .actions {
        white-space: nowrap;
    }
</style>

<div class="container">
    <div class="row align-items-center d-flex justify-content-center" data-animate="fadeInUp">
        <div class="heading-text heading-section text-center mt-5">
            <h2 style="color: black; font-weight: bold;">Collection</h2>
            <p> </p>
        </div>
    </div>
    <br>
    <?= $this->Flash->render() ?>
    <div class="container-fluid">
        <div class="moncases index content">

            <!-- Page Heading -->
            <div>
                <a class="nav-button active" href="<?= $this->Url->build(['controller'=>'Moncases','action'=> 'userlist']) ?>">
                    <?= $this->Html->link(__('Home'), ['controller' => 'Moncases', 'action' => 'userlist'], ['class' => 'btn btn-primary']) ?>
                </a>



                <?= $this->Html->link(__('New Collection'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            </div>

            <br><br>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th><?= h('Collection Name') ?></th>
                        <th><?= h('Username') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <?php foreach ($collections as $collection): ?>
                        <td><?= h($collection->name) ?></td>
                        <td><?= $collection->has('user') ? $this->Html->link($collection->user->username, ['controller' => 'Users', 'action' => 'view', $collection->user->username]) : '' ?></td>


                        <td class="actions">
                            <?=
                            $this->Html->link(__('View'),
                                [
                                    'action' => 'view', $collection->id
                                ],
                                [
                                    'class' => 'btn btn-primary'
                                ]
                            )
                            ?>

                            <?= $this->Html->link(__('Edit'),
                                ['action' => 'edit', $collection->id
                                ],
                                [
                                    'class' => 'btn btn-primary'
                                ]) ?>

                            <?=
                            $this->Form->postLink(__('Delete'),
                                [
                                    'action' => 'delete', $collection->id
                                ],
                                [
                                    'class' => 'btn btn-danger',
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
            <script>
                $(document).ready(function() {
                    $('#dataTable').DataTable();
                });

            </script>
        </div>
    </div>
</div>

