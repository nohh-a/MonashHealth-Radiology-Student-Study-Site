<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Moncase> $moncases
 * @var iterable<\App\Model\Entity\Save> $saves
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
            <h2 style="color: black; font-weight: bold;">My Favorites</h2>
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
                    <?= $this->Html->link(__('Home'), ['action' => 'userlist'], ['class' => 'btn btn-primary']) ?>
                </a>

                <?=
                $this->Form->postLink(__('Unsave All'),
                    [
                    'controller' => 'saves',
                    'action' => 'deleteAll'
                    ],
                    [
                    'class' => 'btn btn-danger float-right',
                    'confirm' => __('Are you sure you want to unsave all of cases?')
                    ])
                ?>
            </div>

            <br><br>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th><?= h('Image Url') ?></th>
                        <th><?= h('Accession No') ?></th>
                        <th><?= h('Case Type') ?></th>
                        <th><?= h('Diagnosis') ?></th>
                        <th><?= h('Contributor') ?></th>
                        <th><?= h('Date') ?></th>


                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <?php foreach ($saves as $save): ?>

                        <?php foreach ($moncases as $moncases): ?>
                        <td><?= $this->Html->image($moncases->image_url, ['width' => '100px']); ?></td>
                        <td><?= h($moncases->accession_no) ?></td>
                        <td><?= h($moncases->case_type) ?></td>
                        <td><?= h($moncases->diagnosis) ?></td>
                        <td><?= h($moncases->contributor) ?></td>
                        <td><?= h($moncases->date) ?></td>


                        <td class="actions">
                            <?=
                            $this->Html->link(__('View'),
                                [
                                    'action' => 'view', $moncases->id
                                ],
                                [
                                    'class' => 'btn btn-primary'
                                ]
                            )
                            ?>


                            <?=
                            $this->Form->postLink(__('Unsave'),
                                [
                                    'controller' => 'saves', 'action' => 'delete', $save->id
                                ],
                                [
                                    'confirm' => __('Are you sure you want to unsave # {0}?', $moncases->diagnosis),
                                    'class' => 'btn btn-danger'
                                ])
                            ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
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



