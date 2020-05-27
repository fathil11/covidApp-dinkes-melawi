<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('img/logoMelawi.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/logoMelawi.png')); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Covid Admin Panel
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/admin/datatable.css')); ?>">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link href="<?php echo e(asset('css/admin/material-dashboard.css')); ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo e(asset('css/admin/demo.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('css/admin/custom.css')); ?>" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="azure" data-background-color="white">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo"><a href="#" class="simple-text logo-normal">
                    Covid 19 Admin Panel
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item <?php if(request()->is('admin')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="/admin">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if(request()->is('admin/orang/tambah')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="/admin/orang/tambah">
                            <i class="material-icons">person_add</i>
                            <p>Tambah Orang</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if(request()->is('admin/orang')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="/admin/orang">
                            <i class="material-icons">people</i>
                            <p>Lihat Seluruh Orang</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if(request()->is('admin/orang/rapid-test')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="/admin/orang/rapid-test">
                            <i class="material-icons">offline_bolt</i>
                            <p>Kelola Rapid Test</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if(request()->is('admin/orang/otg')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="/admin/orang/otg">
                            <i class="material-icons">loop</i>
                            <p>Kelola OTG</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if(request()->is('admin/orang/odp')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="/admin/orang/odp">
                            <i class="material-icons">search</i>
                            <p>Kelola ODP</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if(request()->is('admin/orang/pdp')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="/admin/orang/pdp">
                            <i class="material-icons">local_convenience_store</i>
                            <p>Kelola PDP</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if(request()->is('admin/peta')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="/admin/peta">
                            <i class="material-icons">map</i>
                            <p>Peta</p>
                        </a>
                    </li>
                    <li class="nav-item <?php if(request()->is('admin/laporan')): ?> active <?php endif; ?>">
                        <a class="nav-link" href="/admin/laporan">
                            <i class="material-icons">book</i>
                            <p>Laporan</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/logout">
                            <i class="material-icons">subdirectory_arrow_left</i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#"><?php echo $__env->yieldContent('title'); ?></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">

                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="/logout">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <?php echo $__env->yieldContent('content'); ?>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script> - Dinkes Melawi & Melawi Software Production
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/admin/bootstrap-material-design.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/admin/perfect-scrollbar.jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/admin/chartist.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/admin/jquery.dataTables.min.js')); ?>"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    
    <script src="<?php echo e(asset('js/admin/material-dashboard.js?v=2.1.2')); ?>"></script>
    <?php echo $__env->yieldContent('js'); ?>

</body>

</html>
<?php /**PATH E:\Web\dinkes-melawi-corona\resources\views/layouts/admin.blade.php ENDPATH**/ ?>