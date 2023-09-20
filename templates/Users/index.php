<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
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
            <h1>My Users</h1>
            <ul class="bread-crumb clearfix">
                <li>Case List</li>
                <li>User Management</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<?= $this->Flash->render() ?>

<div class="container">
    <div class="container-fluid">
        <div class="users index content">
            <div class="row">
                <div class="col-12">
                    <?= $this->Flash->render() ?>
                    <div class="d-flex" style="justify-content: flex-end;">
                        <?= $this->Html->link(__('Create New User'), ['action' => 'add'], ['class' => 'theme-btn style-one']) ?>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th><?= h('Username') ?></th>
                        <th><?= h('First Name') ?></th>
                        <th><?= h('Last Name') ?></th>
                        <th><?= h('Email') ?></th>
                        <th><?= h('Role') ?></th>
                        <th><?= h('Contributor') ?></th>
                        <th><?= h('Action') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->first_name) ?></td>
                            <td><?= h($user->last_name) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->access_role) ?></td>
                            <td><?= h($user->contributor) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-outline-primary']) ?>
                                <?= $this->Html->link(__('Change Password'), ['controller' => 'Auth', 'action' => 'change-password', $user->id], ['class' => 'btn btn-outline-warning']) ?>
                                <?php if ($user->access_role !== 'ADMIN') : ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], [
                                        'class' => 'btn btn-outline-danger',
                                        'confirm' => __("Are you sure you want to delete this user?\n{0} {1} ({2})", $user->first_name, $user->last_name, $user->email)]) ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br><br><br>


<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>




