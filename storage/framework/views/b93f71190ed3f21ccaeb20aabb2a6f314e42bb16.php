<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#00989b" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="<?php echo e(asset('img/icon/apple-icon-180x180-dunplab-manifest-702.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/icon/apple-icon-180x180-dunplab-manifest-702.png')); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/public/custom.css')); ?>">
    <title>Covid Melawi</title>
    <?php echo $__env->yieldContent('manifest'); ?>
    <style>
        .hidden {
            display: none !important;
        }

        #installContainer {
            position: absolute;
            bottom: 1em;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        #installContainer button {
            background-color: inherit;
            border: 1px solid white;
            color: white;
            font-size: 1em;
            padding: 0.75em;
        }
    </style>
</head>

<body>
    <header class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand font-weight-reguler" href="/">
                <img src="<?php echo e(asset('img/icon/android-icon-192x192-dunplab-manifest-702.png')); ?>" width="30px"
                    class="mr-lg-2" alt="">
                DINKES MELAWI
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto text-main">
                    <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?>">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown <?php echo e(Request::is('/data') ? 'active' : ''); ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a rel="noopener" arget="_blank" class="dropdown-item"
                                href="https://dinkes.kalbarprov.go.id/covid-19/">Data Kalbar</a>
                            <a rel="noopener" arget="_blank" class="dropdown-item"
                                href="https://covid19.go.id/peta-sebaran">Data
                                Indonesia</a>
                            <a rel="noopener" arget="_blank" class="dropdown-item" href="https://covid19.who.int/">Data
                                Dunia</a>
                        </div>
                    </li>
                    <li class="nav-item <?php echo e(Request::is('berita') || Request::is('berita/*') ? 'active' : ''); ?>">
                        <a class="nav-link" href="/berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#download" id="butInstall">Download Aplikasi</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::is('hubungi-kami') ? 'active' : ''); ?>">
                        <a class="nav-link" href="/hubungi-kami">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <?php echo $__env->yieldContent('content'); ?>
    <footer class="bg-white mt-5">
        <div class="container pt-4">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-2 text-center text-md-left">
                            <img class="" src="<?php echo e(asset('img/icon/apple-icon-180x180-dunplab-manifest-702.png')); ?>"
                                width="40px" alt="" srcset="">
                        </div>
                        <div class="col-md-6 text-center text-md-left">
                            <h4 class="font-weight-bold">DINKES MELAWI</h4>
                            <p>Dinas Kesehatan Kabupaten Melawi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="footer-cp">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script> - Dinkes Melawi & Melawi Software Production
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div class="glitchButton" style="position:fixed;top:20px;right:20px;"></div>

    <script src="<?php echo e(asset('js/lazysizes.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('js/sweetalert.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pwa.js')); ?>"></script>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH /home/fatdev/Developments/Web/App/covidApp-dinkes-melawi/resources/views/layouts/public.blade.php ENDPATH**/ ?>