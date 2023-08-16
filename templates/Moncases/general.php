<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Moncase> $moncases
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
            <h1 style="color: black; font-weight: bold;">General</h1>
            <p> </p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="moncases index content">
            <!-- Page Heading -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th><?= h('Imaging') ?></th>
                        <th><?= h('Accession No') ?></th>
                        <th><?= h('Case Type') ?></th>
                        <th><?= h('Date') ?></th>
                        <th><?= h('Max Marks') ?></th>
                        <th><?= h('Contributor') ?></th>

                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($moncases as $moncases): ?>
                        <tr>

                            <td><?= $this->Html->image($moncases->imaging, ['width' => '150px']); ?></td>
                            <td><?= h($moncases->accession_no) ?></td>
                            <td><?= h($moncases->case_type) ?></td>
                            <td><?= h($moncases->date) ?></td>
                            <td><?= h($moncases->max_marks) ?></td>
                            <td><?= h($moncases->contributor) ?></td>


                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $moncases->id], ['class' => 'btn btn-primary']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $moncases->id], ['class' => 'btn btn-warning']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $moncases->id], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $moncases->id)]) ?>
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

    <td><button class="btn btn-primary" onclick="goBack()">Go Back</button></td>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</div>
