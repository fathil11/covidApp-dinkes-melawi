<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Post Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('css/post-admin/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/post-admin/vendor.bundle.base.css') }}">

    <link rel="stylesheet" href="{{ asset('css/post-admin/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/post-admin/ckstyle.css') }}"> --}}
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('img/icon/apple-icon-144x144-dunplab-manifest-702.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="#"><img src="{{ asset('img/logo-mini.svg') }}"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="#"><img src="{{ asset('img/logo-mini.svg') }}"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-format-line-spacing"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <img src="{{ asset('img/aj.png') }}" alt="profile">
                                <span class="login-status online"></span>
                                <!--change to offline or busy as needed-->
                            </div>
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold mb-2">dr. Ahmad Jawahir</span>
                                <span class="text-secondary text-small">Kepala Dinkes Melawi</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/content') ? 'active' : '' }}">
                        <a class="nav-link" href="/admin/content">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/content/post') ? 'active' : '' }}">
                        <a class="nav-link" href="/admin/content/post">
                            <span class="menu-title">Kelola Post</span>
                            <i class="mdi mdi-view-list menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin/content/post/tambah') ? 'active' : '' }}">
                        <a class="nav-link" href="/admin/content/post/tambah">
                            <span class="menu-title">Buat Post</span>
                            <i class="mdi mdi-pencil menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">
                            <span class="menu-title">Logout</span>
                            <i class="mdi mdi-logout-variant menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            @php
                            if(Request::is('admin/content')){
                            $icon = 'mdi-home';
                            }elseif((Request::is('admin/content/post'))){
                            $icon = 'mdi-view-list';
                            }elseif((Request::is('admin/content/post/tambah'))){
                            $icon = 'mdi-pencil';
                            }
                            @endphp
                            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                                <i class="mdi {{ $icon }}"></i>
                            </span> @yield('title') </h3>
                    </div>
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script> - Dinkes Melawi & Melawi Software Production</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('js/post-admin/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('js/post-admin/off-canvas.js') }}"></script>
    <script src="{{ asset('js/post-admin/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/post-admin/misc.js') }}"></script>
    @yield('js')
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
</body>

</html>
