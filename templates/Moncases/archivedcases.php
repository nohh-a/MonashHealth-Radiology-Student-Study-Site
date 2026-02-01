<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Moncase> $moncases
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);

$this->assign('title', 'Archived Cases - Cases');
?>

<style>
    /* Table header */
    table th {
        background-color: #576ec2;
        font-weight: bold;
        text-align: center;
        color: #ececf8;
    }

    /* Table cells */
    table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    /* Hover effect */
    table tr:hover {
        background-color: rgba(6, 152, 225, 0.16);
    }

    /* Actions column */
    .actions {
        white-space: nowrap;
    }

    .body {
        font-family: 'Poppins', sans-serif;
    }

    /* Mobile */
    @media (max-width: 768px) {
        table th,
        table td {
            font-size: 14px;
        }
    }

    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }
</style>

<section class="page-title bg-color-1 text-center">
    <div class="auto-container">
        <div class="content-box">
            <h1>Archived Cases</h1>
            <ul class="bread-crumb clearfix">
                <li>
                    <a href="<?= $this->Url->build(['controller' => 'Moncases', 'action' => 'userlist']) ?>">
                        Case List
                    </a>
                </li>
                <li>Archived Cases</li>
            </ul>
        </div>
    </div>
</section>

<?= $this->Flash->render() ?>

<div class="container">
    <div class="container-fluid">
        <div class="moncases index content">

            <div class="row d-flex" style="justify-content: flex-end; padding: 10px 18px 10px 18px;">
                <?php if (\Cake\Core\Configure::read('DemoMode')): ?>
                    <button
                        type="button"
                        class="btn btn-danger float-right"
                        onclick="alert('This website is running in demo mode. Archived cases cannot be permanently deleted.')"
                    >
                        Delete All Permanently
                    </button>
                <?php else: ?>
                    <?= $this->Form->postLink(
                        __('Delete All Permanently'),
                        ['action' => 'deleteall'],
                        [
                            'class' => 'btn btn-danger float-right',
                            'confirm' => __('Are you sure you want to delete all archived cases?'),
                        ]
                    ) ?>
                <?php endif; ?>
            </div>


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
                        <?php foreach ($moncases as $moncase): ?>
                            <tr>
                                <td><?= $this->Html->image($moncase->image_url, ['width' => '100px']) ?></td>
                                <td><?= h($moncase->accession_no) ?></td>
                                <td><?= h($moncase->case_type) ?></td>
                                <td><?= h($moncase->diagnosis) ?></td>
                                <td><?= h($moncase->contributor) ?></td>
                                <td><?= h($moncase->date) ?></td>

                                <td class="actions">
                                    <?= $this->Html->link(
                                        __('View'),
                                        ['action' => 'view', $moncase->id],
                                        ['class' => 'btn btn-outline-primary']
                                    ) ?>

                                    <?= $this->Form->postLink(
                                        __('Restore'),
                                        ['action' => 'restore', $moncase->id],
                                        [
                                            'class' => 'btn btn-outline-secondary',
                                            'confirm' => __('Are you sure you want to restore # {0}?', $moncase->diagnosis),
                                        ]
                                    ) ?>
                                    <?php if (\Cake\Core\Configure::read('DemoMode')): ?>
                                        <button
                                            type="button"
                                            class="btn btn-outline-danger"
                                            onclick="alert('This website is running in demo mode. Archived cases cannot be permanently deleted.')"
                                        >
                                            Delete Permanently
                                        </button>
                                    <?php else: ?>
                                        <?= $this->Form->postLink(
                                            __('Delete Permanently'),
                                            ['action' => 'delete', $moncase->id],
                                            [
                                                'class' => 'btn btn-outline-danger',
                                                'confirm' => __('Are you sure you want to delete # {0}?', $moncase->diagnosis),
                                            ]
                                        ) ?>
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
