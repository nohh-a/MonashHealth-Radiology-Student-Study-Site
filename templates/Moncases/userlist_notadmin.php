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

        .designation {
            color: #576ec2;
        }

        .project-block-one .inner-box .image-box {
            background: #576ec2;

        }

        .carousel-text h5 {
            padding-top: 20px;
            padding-bottom: 5px;
            color: #576ec2;
            font-weight: 600;
            font-size: 18px;
        }

        .carousel-text p {
            padding-bottom: 30px;
        }

        .button a {
            color: #6377ee !important;

        }

        .content p {
            margin-left: 25px;
        }

        .noresults {
            padding-left: 30px;
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
                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                        <h3> Sort by</h3>
                        <?= $this->Form->create(null, ['url' => ['controller' => 'Moncases', 'action' => 'userlistNotadmin'], 'type' => 'get']) ?>
                        <?= $this->Form->select(
                            'sort',
                            [
                                'newest' => ' Newest - Oldest',
                                'oldest' => 'Oldest - Newest',
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

                    <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                        <h3><br></h3>
                        <?= $this->Html->link(__('New'), ['controller' => 'moncases', 'action' => 'addnewcase'], ['class' => 'theme-btn style-one']) ?>
                    </div>
                    <div class = "col-lg-2 col-md-2 col-sm-2 col-2">
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
                                                                    <p>
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
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="accordion block active-block">
                                                            <div class="acc-btn active">
                                                                <h4><span>+</span>Contributor</h4>
                                                            </div>
                                                            <div class="acc-content current">
                                                                <div class="content">
                                                                    <p>
                                                                    <?= $this->Form->select('contributor', [
                                                                        'Trainee' => 'Trainee',
                                                                        'Consultant' => 'Consultant',
                                                                        'Library' => 'Library',
                                                                    ], [
                                                                        'class' => 'select select_mod-a jelect',
                                                                        'default' => $this->request->getQuery('contributor'),
                                                                        'empty' => 'Choose Contributor',
                                                                    ]); ?>
                                                                    </p>
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
                                                                    <p> <?= $this->Form->select('specialty', [
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
                                                                            'default' => $this->request->getQuery('specialty'),
                                                                            'empty' => 'Choose Specialty',
                                                                        ]); ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="accordion block active-block">
                                                            <div class="acc-btn active">
                                                                <h4><span>+</span>Imaging</h4>
                                                            </div>
                                                            <div class="acc-content current">
                                                                <div class="content">
                                                                    <p>
                                                                        <?= $this->Form->select('imaging', [
                                                                            'X-ray' => 'X-ray',
                                                                            'Ultrasound' => 'Ultrasound',
                                                                            'CT' => 'CT',
                                                                            'MRI' => 'MRI',
                                                                            'Nuclear Medicine' => 'Nuclear Medicine',
                                                                            'Fluoroscopy' => 'Fluoroscopy',
                                                                            'Mammography' => 'Mammography',
                                                                            'Other' => 'Other',
                                                                        ], [
                                                                            'class' => 'form-select',
                                                                            'empty' => 'Select Imaging',
                                                                        ]) ?>
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
                            <?php foreach ($moncases as $index => $moncase) : ?>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="project-block-one mb-100 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box" style="text-align: center;">
                                            <div class="image-holder">
                                                <figure class="image-box" style="height: fit-content;">
                                                    <a href="<?= $this->Url->build(['controller' => 'moncases', 'action' => 'viewNotadmin', $moncase->id])?>">
                                                        <img src="<?= $this->Url->image($moncase -> image_url, ['alt' => 'photo']) ?>" style="object-fit: fill; width: 390px; height: 340px;">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="lower-content" style="height: fit-content;">
                                                    <span class="designation"><?= h($moncase->case_type) ?>&nbsp;|&nbsp;
                                                        <?= h($moncase->author) ?>&nbsp;|&nbsp;
                                                        <?= h($moncase->date) ?>
                                                    </span>
                                                <h3><?= h($moncase->diagnosis) ?></h3>
                                                <div class="container">
                                                    <div id="textCarousel<?= $index ?>" class="carousel slide" data-ride="carousel" data-touch="true" data-interval="false">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <div class="carousel-text">
                                                                    <h5>Specialty</h5>
                                                                    <p><?= !empty($moncase->specialty) ? h($moncase->specialty) : 'N/A' ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div class="carousel-text">
                                                                    <h5>Teaching Points</h5>
                                                                    <p><?= !empty($moncase->teaching_points) ? h($moncase->teaching_points) : 'N/A' ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div class="carousel-text">
                                                                    <h5>Imaging</h5>
                                                                    <p><?= !empty($moncase->imaging) ? h($moncase->imaging) : 'N/A' ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" style="margin-right: 19px;" href="#textCarousel<?= $index ?>" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#textCarousel<?= $index ?>" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                    <div class="row" style="display: flex; justify-content: center; flex-wrap: nowrap;">

                                                       <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <?= $this->Html->postLink(__('Save'), ['action' => 'savecaseaction', $moncase->id], ['class' => 'theme-btn style-two','style'=>'padding: 0px 45px; font-size: 15px;', 'confirm' => __('Are you sure you want to save # {0}?', $moncase->diagnosis)]) ?>
                                                        </div> -->

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <dev class="noresults">
                                <p>No results found.</p>
                            </dev>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- list view-->
            <div id ="moncases-list" class="col-lg-9 col-md-12 col-sm-12 content-side" style="display: none">
                <div class="row clearfix">
                    <table class="table table-hover table-responsive wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="margin-left: 18px;">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Accession No.</th>
                            <th>Type</th>
                            <th>Diagnosis</th>
                            <th>Imaging</th>
                            <th>Contributor</th>
                            <th>Date</th>
                            <th>Rating</th>

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
                                    <td><?= h($moncase->case_type) ?></td>
                                    <td><?= h($moncase->diagnosis) ?></td>
                                    <td><?= !empty($moncase->imaging) ? h($moncase->imaging) : 'N/A' ?></td>
                                    <td><?= h($moncase->contributor) ?></td>
                                    <td><?= h($moncase->date) ?></td>
                                    <td><?= !empty($moncase->rating) ? h($moncase->rating) : 'N/A' ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <dev class="noresults">
                                <p>No results found.</p>
                            </dev>
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
                                            <p>
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
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <h4><span>+</span>Contributor</h4>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <p>
                                            <?= $this->Form->select('contributor', [
                                                'Trainee' => 'Trainee',
                                                'Consultant' => 'Consultant',
                                                'Library' => 'Library',
                                            ], [
                                                'class' => 'select select_mod-a jelect',
                                                'default' => $this->request->getQuery('contributor'),
                                                'empty' => 'Choose Contributor',
                                            ]); ?>
                                            </p>
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
                                            <p> <?= $this->Form->select('specialty', [
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
                                                    'default' => $this->request->getQuery('specialty'),
                                                    'empty' => 'Choose Specialty',
                                                ]); ?>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <h4><span>+</span>Imaging</h4>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <p>
                                                <?= $this->Form->select('imaging', [
                                                    'X-ray' => 'X-ray',
                                                    'Ultrasound' => 'Ultrasound',
                                                    'CT' => 'CT',
                                                    'MRI' => 'MRI',
                                                    'Nuclear Medicine' => 'Nuclear Medicine',
                                                    'Fluoroscopy' => 'Fluoroscopy',
                                                    'Mammography' => 'Mammography',
                                                    'Other' => 'Other',
                                                ], [
                                                    'class' => 'form-select',
                                                    'empty' => 'Select Imaging',
                                                ]) ?>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget sidebar-tags">
                        <div class="widget-title">
                            <div class="widget-content" style="display: flex; justify-content: space-between; align-items: center;">
                                <?= $this->Form->button(__('Apply Filter'), ['class' => 'theme-btn style-one', 'style' => 'flex: 1; margin-right: 10px;']) ?>
                                <a href="<?= $this->Url->build('/') ?>"><button class="theme-btn style-two" style="flex: 1;">Reset Filter</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-grid end -->

