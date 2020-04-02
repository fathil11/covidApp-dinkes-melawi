<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/logoMelawi.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logoMelawi.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/public/custom.css') }}">
    <title>Covid Melawi</title>
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand font-weight-reguler" href="/">
                <img src="{{ asset('img/logoMelawi.png') }}" width="30px" class="mr-lg-2" alt="">
                DINKES MELAWI
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto text-main">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hubungikami">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="bg-white mt-5">
        <div class="container pt-4">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-2 text-center text-md-left">
                            <img class="" src="{{ asset('img/logoMelawi.png') }}" width="40px" alt="" srcset="">
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
    <script src="{{ asset('js/jquery.min.js') }}">
    </script>
    <script src="{{ asset('js/popper.min.js') }}">
    </script>
    <script src="{{ asset('js/bootstrap.js') }}">
    </script>
    @yield('js')
</body>

</html>
