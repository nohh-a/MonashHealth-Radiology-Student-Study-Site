<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Moncase> $moncases
 * @var int $oscerCount
 * @var int $longCount
 * @var int $mediumCount
 * @var int $shortCount
 * @var int $generalCount
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
            <h1 style="color: black; font-weight: bold;">Dashboard</h1>
            <p> </p>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <a href="<?php echo $this->Url->build(['controller'=>'Moncases','action'=> 'oscer']) ?>" class="card border-left-success shadow h-100 d-flex flex-column justify-content-center align-items-center">
                <div class="text font-weight-bold text-success text-uppercase mb-1">oscer</div>
                <div class="h3 font-weight-bold text-red mb-0 d-flex align-items-center">
                    <span style="font-size: 65%;"><?= h($oscerCount) ?></span>
                </div>
            </a>
        </div>

        <div class="col mb-3">
            <a href="<?php echo $this->Url->build(['controller'=>'Moncases','action'=> 'long']) ?>" class="card border-left-success shadow h-100 d-flex flex-column justify-content-center align-items-center">
                <div class="text font-weight-bold text-success text-uppercase mb-1">long</div>
                <div class="h3 font-weight-bold text-orange mb-0 d-flex align-items-center">
                    <span style="font-size: 65%;"><?= h($longCount) ?></span>
                </div>
            </a>
        </div>

        <div class="col mb-3">
            <a href="<?php echo $this->Url->build(['controller'=>'Moncases','action'=> 'medium']) ?>" class="card border-left-success shadow h-100 d-flex flex-column justify-content-center align-items-center">
                <div class="text font-weight-bold text-success text-uppercase mb-1">medium</div>
                <div class="h3 font-weight-bold text-pink mb-0 d-flex align-items-center">
                    <span style="font-size: 65%;"><?= h($mediumCount) ?></span>
                </div>
            </a>
        </div>

        <div class="col mb-3">
            <a href="<?php echo $this->Url->build(['controller'=>'Moncases','action'=> 'short']) ?>" class="card border-left-success shadow h-100 d-flex flex-column justify-content-center align-items-center">
                <div class="text font-weight-bold text-success text-uppercase mb-1">short</div>
                <div class="h3 font-weight-bold text-blue mb-0 d-flex align-items-center">
                    <span style="font-size: 65%;"><?= h($shortCount) ?></span>
                </div>
            </a>
        </div>

        <div class="col mb-3">
            <a href="<?php echo $this->Url->build(['controller'=>'Moncases','action'=> 'general']) ?>" class="card border-left-success shadow h-100 d-flex flex-column justify-content-center align-items-center">
                <div class="text font-weight-bold text-success text-uppercase mb-1">general</div>
                <div class="h3 font-weight-bold text-blue mb-0 d-flex align-items-center">
                    <span style="font-size: 65%;"><?= h($generalCount) ?></span>
                </div>
            </a>
        </div>
    </div>

    <br>
    <div class="container-fluid">
        <div class="moncases index content">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">All Cases</h1>
                <?= $this->Html->link(__('Add a New Case'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            </div>
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

                            <td><?= $this->Html->image($moncases->imaging, ['width' => '150px']); ?><td>
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
</div>



