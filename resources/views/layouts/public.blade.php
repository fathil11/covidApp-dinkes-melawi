<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/public/custom.css') }}">
    <title>Covid Melawi</title>
    <link rel="manifest" href="{{ asset('manifest.json') }}">
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
    <p id="requireHTTPS" class="hidden">
        <b>STOP!</b> This page <b>must</b> be served over HTTPS.
        Please <a>reload this page via HTTPS</a>.
    </p>

    <p>
        Make me installable, follow the
        <a href="https://web.dev/installable/discover-installable/codelab-make-installable">instructions</a> here.
    </p>
    <!-- Install button, hidden by default -->
    <div id="installContainer" class="hidden">
        <button id="butInstall" type="button">
            Install
        </button>
    </div>
    <div class="glitchButton" style="position:fixed;top:20px;right:20px;"></div>
    <script>
        const divInstall = document.getElementById('installContainer');
const butInstall = document.getElementById('butInstall');

/* Put code here */



/* Only register a service worker if it's supported */
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('./service-worker.js');
}

/**
 * Warn the page must be served over HTTPS
 * The `beforeinstallprompt` event won't fire if the page is served over HTTP.
 * Installability requires a service worker with a fetch event handler, and
 * if the page isn't served over HTTPS, the service worker won't load.
 */
if (window.location.protocol === 'http:') {
  const requireHTTPS = document.getElementById('requireHTTPS');
  const link = requireHTTPS.querySelector('a');
  link.href = window.location.href.replace('http://', 'https://');
  requireHTTPS.classList.remove('hidden');
}
    </script>
    <div class="glitchButton" style="position:fixed;top:20px;right:20px;"></div>
    <script src="https://button.glitch.me/button.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}">
    </script>
    <script src="{{ asset('js/popper.min.js') }}">
    </script>
    <script src="{{ asset('js/bootstrap.js') }}">
    </script>
    @yield('js')
    <script>
        let deferredPrompt;

        window.addEventListener('beforeinstallprompt', (e) => {
        // Stash the event so it can be triggered later.
        deferredPrompt = e;
        // Update UI notify the user they can add to home screen
        showInstallPromotion();
        ...
        });

        window.addEventListener('beforeinstallprompt', (e) => {
        // Prevent Chrome 67 and earlier from automatically showing the prompt
        e.preventDefault();
        // Stash the event so it can be triggered later.
        deferredPrompt = e;
        // Update UI to notify the user they can add to home screen
        addBtn.style.display = 'block';

        addBtn.addEventListener('click', (e) => {
            // hide our user interface that shows our A2HS button
            addBtn.style.display = 'none';
            // Show the prompt
            deferredPrompt.prompt();
            // Wait for the user to respond to the prompt
            deferredPrompt.userChoice.then((choiceResult) => {
                if (choiceResult.outcome === 'accepted') {
                console.log('User accepted the A2HS prompt');
                } else {
                console.log('User dismissed the A2HS prompt');
                }
                deferredPrompt = null;
            });
        });
        });
    </script>
</body>

</html>
