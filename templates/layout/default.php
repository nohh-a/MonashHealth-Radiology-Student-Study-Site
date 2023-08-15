<!DOCTYPE html>
<html lang="en">

<head>

    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= $this->Html->meta('icon') ?>

    <title><?= $this->fetch('title') ?></title>

    <!-- Custom fonts for this template-->
    <?= $this->Html->css('/vendor/fontawesome-free/css/all.min.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <?= $this->Html->css('sb-admin-2.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <?= $this->Html->script('/vendor/jquery/jquery.min.js') ?>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= $this->Url->build(['controller'=>'Pages']) ?>">
            <div class="sidebar-brand-icon">
                <?= $this->Html->image('logo.png', ['height' => 30, 'width' => 95, 'alt' => 'Logo']) ?>
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
            <a class="nav-link" href="<?= $this->Url->build(['controller'=>'Moncases','action'=> 'index']) ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span style="font-size: 100%;">Dashboard</span></a>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="<?= $this->Url->build(['controller'=>'Moncases','action'=> 'add']) ?>">
                <i class="fas fa-fw fa-plus-square"></i>
                <span style="font-size: 100%;">Add a New Case</span></a>
        </li>

        <hr class="sidebar-divider">
        <!-- Heading -->
        <div class="sidebar-heading">
            Cases
        </div>

        <!-- Nav Item - Oscer -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= $this->Url->build(['controller'=>'Moncases','action'=> 'oscer']) ?>">
                <span style="font-size: 100%;">Oscer</span>
            </a>
        </li>

        <!-- Nav Item - Long -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= $this->Url->build(['controller'=>'Moncases','action'=> 'long']) ?>">
                <span style="font-size: 100%;">Long</span>
            </a>
        </li>

        <!-- Nav Item - Medium -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= $this->Url->build(['controller'=>'Moncases','action'=> 'medium']) ?>">
                <span style="font-size: 100%;">Medium</span>
            </a>
        </li>

        <!-- Nav Item - Short -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= $this->Url->build(['controller'=>'Moncases','action'=> 'short']) ?>">
                <span style="font-size: 100%;">Short</span>
            </a>
        </li>

        <!-- Nav Item - General -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= $this->Url->build(['controller'=>'Moncases','action'=> 'general']) ?>">
                <span style="font-size: 100%;">General</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Users
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
               aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-user"></i>
                <span style="font-size: 100%;">User Management</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Users','action'=> 'add']) ?>">Add a New User</a>
                    <a class="collapse-item" href="<?= $this->Url->build(['controller'=>'Users','action'=> 'index']) ?>">All Users</a>
                    <div class="collapse-divider"></div>
                </div>
            </div>
        </li>


        <hr class="sidebar-divider d-none d-md-block">


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                            <?=$this->Html->image('undraw_profile.svg', ['class' => 'img-profile rounded-circle']);?>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Monash Health</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= $this->Url->build(['controller'=>'Users','action'=> 'logout']) ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>

<!-- Core plugin JavaScript-->
<?= $this->Html->script('/vendor/jquery-easing/jquery.easing.min.js') ?>

<!-- Custom scripts for all pages-->
<?= $this->Html->script('/js/sb-admin-2.min.js') ?>
<?= $this->fetch('script') ?>



</body>

</html>
