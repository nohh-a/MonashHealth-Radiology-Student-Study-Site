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
        background-color: #576ec2;
        font-weight: bold;
        text-align: center;
        color: #ececf8;
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



</style>

<!--Page Title-->
<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="content-box">
            <h1>My Collection</h1>
            <ul class="bread-crumb clearfix">
                <li>Case List</li>
                <li>My Collection</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<?= $this->Flash->render() ?>


<div class="container">
    <div class="container-fluid">
        <div class="moncases index content">
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
                                    'class' => 'btn btn-outline-primary'
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
                                    'class' => 'btn btn-outline-danger'
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



