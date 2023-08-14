<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
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
            <h1 style="color: black; font-weight: bold;">Users</h1>
            <p> </p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="users index content">
            &nbsp;<?= $this->Html->link(__('Create New User'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>

            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th><?= h('ID') ?></th>
                            <th><?= h('Username') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>

                                <td><?= $this->Number->format($user->id) ?></td>
                                <td><?= h($user->username) ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-primary']) ?>
                                    <?php if ($user->id !== $this->getRequest()->getSession()->read('Auth.User.id')): ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-warning btn-sm']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete user {0}?', $user->username), 'class' => 'btn btn-danger btn-sm']) ?>
                                    <?php endif; ?>
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
