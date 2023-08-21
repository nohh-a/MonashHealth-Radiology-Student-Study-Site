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

                        <th><?= h('Username') ?></th>
                        <th><?= h('first_name') ?></th>
                        <th><?= h('last_name') ?></th>
                        <th><?= h('email') ?></th>
                        <th><?= h('Action') ?></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>

                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->first_name) ?></td>
                            <td><?= h($user->last_name) ?></td>
                            <td><?= h($user->email) ?></td>


                            <td class="actions">
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-info']) ?>
                                <?= $this->Html->link(__('Change Password'), ['controller' => 'Auth', 'action' => 'change-password', $user->id], ['class' => 'btn btn-warning']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger', 'confirm' => __("Are you sure you want to delete this user?\n{0} {1} ({2})", $user->first_name, $user->last_name, $user->email)]) ?>
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


