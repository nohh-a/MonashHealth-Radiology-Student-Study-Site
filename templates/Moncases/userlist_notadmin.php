<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Moncase> $moncases
 * @var int $oscerCount
 * @var int $longCount
 * @var int $mediumCount
 * @var int $shortCount
 * @var int $generalCount
 */

?>

<head>
    <style>
        .image-box p {
            color: #ffffff;
            font-weight: 530;
            text-align: left;
            padding: 5px;
        }
        .big-column {
            width: 200px;

        }
        .designation {
            font-weight: 550;
        }
        .team-block-one .inner-box .image-box .social-links {
            background:#606db7f2;
        }
    </style>


</head>

<!--Page Title-->
<section class="page-title bg-color-1 text-center">
    <div class="pattern-layer" style="background-image: <?= $this->Html->image('/detoxpack/detox/assets/images/pattern-18.png') ?> "</div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Case List</h1>
            <ul class="bread-crumb clearfix">
                <button class="toggle-view-button theme-btn style-two" data-view="grid">Grid</button>
                <button class="toggle-view-button theme-btn style-two" data-view="list">List</button>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<?= $this->Flash->render() ?>

<!-- blog-grid -->
<section class="sidebar-page-container blog-grid">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class = "row">
                    <!-- Sort Feature -->
                    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                        <h3> Sort by</h3>
                        <?= $this->Form->create(null, ['url' => ['controller' => 'Moncases', 'action' => 'userlistNotadmin'], 'type' => 'get']) ?>
                        <?= $this->Form->select(
                            'sort',
                            [
                                'newest' => ' Newest',
                                'oldest' => 'Oldest',
                                'az' => 'A-Z',
                                'za' => 'Z-A',
                                'rating_asc' => 'Rating ASC',
                                'rating_desc' => 'Rating DESC',
                            ],
                            [
                                'empty' => false,
                                'default' => $this->request->getQuery('sort'),
                                'class' => 'custom-select',
                            ]
                        ) ?>
                        <?= $this->Form->button(__('Apply'), ['class' => 'btn btn-secondary', 'style' => 'margin-top: -20px;']) ?>
                    </div>
                    <div class = "col-lg-3 col-md-3 col-sm-3 col-3">
                        <!-- Trigger the modal with a button -->
                        <i class="fas fa-list fa-lg modal-hide" data-toggle="modal" data-target="#myModal"></i>

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <div class="sidebar">
                                            <div class="sidebar-widget sidebar-search">
                                                <div class="widget-title">
                                                    <h3>Search</h3>
                                                </div>
                                                <div class="widget-content">
                                                    <div class="form-group">
                                                        <?= $this->Form->input('search', [
                                                            'type' => 'search',
                                                            'placeholder' => 'Search Diagnosis',
                                                            'default' => $this->request->getQuery('search'),
                                                        ]) ?>
                                                        <button type="submit" class="search-button">
                                                            <?= $this->Html->tag('i', '', ['class' => 'fas fa-search']) ?>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sidebar-widget sidebar-categories">
                                                <div class="widget-title">
                                                    <h3>FILTERS</h3>
                                                </div>
                                                <div class="widget-content">
                                                    <ul class="accordion-box">
                                                        <li class="accordion block active-block">
                                                            <div class="acc-btn active">
                                                                <h4><span>+</span> Type</h4>
                                                            </div>
                                                            <div class="acc-content current">
                                                                <div class="content">
                                                                    <?= $this->Form->select('case_type', [
                                                                        'Oscer' => 'Oscer',
                                                                        'Long' => 'Long',
                                                                        'Medium' => 'Medium',
                                                                        'Short' => 'Short',
                                                                        'General' => 'General',
                                                                    ], [
                                                                        'class' => 'select select_mod-a jelect',
                                                                        'default' => $this->request->getQuery('case_type'),
                                                                        'empty' => 'Choose Case Type',
                                                                    ]); ?>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="accordion block active-block">
                                                            <div class="acc-btn active">
                                                                <h4><span>+</span>Contributor</h4>
                                                            </div>
                                                            <div class="acc-content current">
                                                                <div class="content">
                                                                    <?= $this->Form->select('contributor', [
                                                                        'Trainee' => 'Trainee',
                                                                        'Consultant' => 'Consultant',
                                                                        'Library' => 'Library',
                                                                    ], [
                                                                        'class' => 'select select_mod-a jelect',
                                                                        'default' => $this->request->getQuery('contributor'),
                                                                        'empty' => 'Choose Contributor',
                                                                    ]); ?>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="accordion block active-block">
                                                            <div class="acc-btn active">
                                                                <h4><span>+</span>Rating</h4>
                                                            </div>
                                                            <div class="acc-content current">
                                                                <div class="content">
                                                                    <p> <?= $this->Form->select('rating', [
                                                                            '1' => '1',
                                                                            '2' => '2',
                                                                            '3' => '3',
                                                                            '4' => '4',
                                                                            '5' => '5',
                                                                        ], [
                                                                            'class' => 'form-select',
                                                                            'default' => $this->request->getQuery('rating'),
                                                                            'empty' => 'Choose Rating',
                                                                        ]); ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="sidebar-widget sidebar-tags">
                                                <div class="widget-title">
                                                    <div class="widget-content">
                                                        <?= $this->Form->button(__('Apply Filter'), ['class' => 'theme-btn style-one']) ?>
                                                        <button class="theme-btn style-two"><a href="<?= $this->Url->build('/') ?>">Reset Filter</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <!-- default content-->
            <div id="moncases-grid" class="col-lg-9 col-md-12 col-sm-12 content-side">
                <div class="blog-grid-content">
                    <div class="row clearfix">
                        <?php if ($moncases->count() > 0) : ?>
                            <?php foreach ($moncases as $moncase) : ?>
                                <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                                    <div class="team-block-one mb-100 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="image-holder">
                                                <figure class="image-box" style="height: fit-content;">
                                                    <a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'viewNotadmin', $moncase->id])?>">
                                                        <img src="<?= $this->Url->image($moncase -> image_url, ['alt' => 'photo']) ?>" style="object-fit: fill; width: 390px; height: 340px;">
                                                        <ul class="social-links">
                                                            <p><b>Accession NO: </b> <?= !empty($moncase->accession_no) ? h($moncase->accession_no) : 'N/A' ?></p>
                                                            <p><b>Specialty: </b><?= !empty($moncase->speciality) ? h($moncase->speciality) : 'N/A' ?></p>
                                                            <p><b>Findings: </b><?= !empty($moncase->findings) ? h($moncase->findings) : 'N/A' ?></p>
                                                            <p><b>Imaging: </b><?= !empty($moncase->imaging) ? h($moncase->imaging) : 'N/A' ?></p>
                                                            <p><b>Teaching Points: </b><?= !empty($moncase->teaching_points) ? h($moncase->teaching_points) : 'N/A' ?></p>

                                                        </ul>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="lower-content">
                                                    <span class="designation"><?= h($moncase->case_type) ?>&nbsp;|&nbsp;
                                                        <?= h($moncase->author) ?>&nbsp;|&nbsp;
                                                        <?= h($moncase->date) ?>

                                                    </span>
                                                <h3><?= h($moncase->diagnosis) ?></h3>
                                                <ul>
                                                    <li>Differential Diagnosis: <?= !empty($moncase->differential_diagnosis) ? h($moncase->differential_diagnosis) : 'N/A' ?></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>No results found.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- list view-->
            <div id ="moncases-list" class="col-lg-9 col-md-12 col-sm-12 content-side" style="display: none;">
                <div class="row clearfix">
                    <table class="table table-hover table-responsive wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Accession No.</th>
                            <th>Diagnosis</th>
                            <th class="big-column">Differential Diagnosis</th>
                            <th>Type</th>
                            <th>Findings</th>
                            <th>Imaging</th>
                            <th>Teachings</th>
                            <th>Rating</th>
                            <th>Author</th>
                            <th>Contributor</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if ($moncases->count() > 0) : ?>
                            <?php foreach ($moncases as $moncase) : ?>
                                <tr>
                                    <td>
                                        <img src="<?= $this->Url->image($moncase -> image_url, ['alt'=>'photo']) ?>" style=" height: 142px; max-width: fit-content;">
                                    </td>
                                    <td> <a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'view', $moncase->id])?>"> <?= h($moncase->accession_no)?></a></td>
                                    <td><?= h($moncase->diagnosis) ?></td>
                                    <td><?= !empty($moncase->differential_diagnosis) ? h($moncase->differential_diagnosis) : 'N/A' ?></td>
                                    <td><?= h($moncase->case_type) ?></td>
                                    <td><?= !empty($moncase->findings) ? h($moncase->findings) : 'N/A' ?></td>
                                    <td><?= !empty($moncase->imaging) ? h($moncase->imaging) : 'N/A' ?></td>
                                    <td><?= !empty($moncase->teaching_points) ? h($moncase->teaching_points) : 'N/A' ?></td>
                                    <td><?= !empty($moncase->rating) ? h($moncase->rating) : 'N/A' ?></td>
                                    <td><?= h($moncase->author) ?></td>
                                    <td><?= h($moncase->contributor) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>No results found.</p>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- sidebar of filters and search bar -->
            <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side sidebar-hide">
                <div class="sidebar">
                    <div class="sidebar-widget sidebar-search">
                        <div class="widget-title">
                            <h3>Search</h3>
                        </div>
                        <div class="widget-content">
                            <div class="form-group">
                                <?= $this->Form->input('search', [
                                    'type' => 'search',
                                    'placeholder' => 'Search',
                                    'default' => $this->request->getQuery('search'),
                                ]) ?>
                                <button type="submit" class="search-button">
                                    <?= $this->Html->tag('i', '', ['class' => 'fas fa-search']) ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-categories">
                        <div class="widget-title">
                            <h3>FILTERS</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="accordion-box">
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <h4><span>+</span> Type</h4>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <?= $this->Form->select('case_type', [
                                                'Oscer' => 'Oscer',
                                                'Long' => 'Long',
                                                'Medium' => 'Medium',
                                                'Short' => 'Short',
                                                'General' => 'General',
                                            ], [
                                                'class' => 'select select_mod-a jelect',
                                                'default' => $this->request->getQuery('case_type'),
                                                'empty' => 'Choose Case Type',
                                            ]); ?>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <h4><span>+</span>Contributor</h4>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <?= $this->Form->select('contributor', [
                                                'Trainee' => 'Trainee',
                                                'Consultant' => 'Consultant',
                                                'Library' => 'Library',
                                            ], [
                                                'class' => 'select select_mod-a jelect',
                                                'default' => $this->request->getQuery('contributor'),
                                                'empty' => 'Choose Contributor',
                                            ]); ?>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <h4><span>+</span>Rating</h4>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <p> <?= $this->Form->select('rating', [
                                                    '1' => '1',
                                                    '2' => '2',
                                                    '3' => '3',
                                                    '4' => '4',
                                                    '5' => '5',
                                                ], [
                                                    'class' => 'form-select',
                                                    'default' => $this->request->getQuery('rating'),
                                                    'empty' => 'Choose Rating',
                                                ]); ?>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <h4><span>+</span>Specialty</h4>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <p> <?= $this->Form->select('speciality', [
                                                    'ABDOMINAL' => 'ABDOMINAL',
                                                    'CARDIOTHORACIC' => 'CARDIOTHORACIC',
                                                    'NEURO' => 'NEURO',
                                                    'HEAD AND NECK' => 'HEAD AND NECK',
                                                    'MSK' => 'MSK',
                                                    'BREAST' => 'BREAST',
                                                    'GYN' => 'GYN',
                                                    'O+G' => 'O+G',
                                                    'PEADS' => 'PEADS',
                                                    'VASCULAR' => 'VASCULAR',
                                                    'INTERVENTION' => 'INTERVENTION',
                                                ], [
                                                    'class' => 'form-select',
                                                    'default' => $this->request->getQuery('speciality'),
                                                    'empty' => 'Choose Specialty',
                                                ]); ?>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-tags">
                        <div class="widget-title">
                            <div class="widget-content" style="display: flex; justify-content: space-between; align-items: center;">
                                <?= $this->Form->button(__('Apply Filter'), ['class' => 'theme-btn style-one', 'style' => 'flex: 1;']) ?>
                                <?= $this->Form->end() ?>
                                <button class="theme-btn style-two"><a href="<?= $this->Url->build('/') ?>">Reset Filter</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-grid end -->

