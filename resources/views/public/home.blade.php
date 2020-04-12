@extends('layouts.public')
@section('manifest')
<link rel="manifest" href="{{ asset('manifest.json') }}">
@endsection
@section('content')
<div class="bg-main">
    <div class="container">
        <div class="row pt-4 pb-5 py-md-4">
            <div class="col-md-6 col-sm-12 text-md-left text-center my-auto text-white">
                <h1 class="display-4 font-weight-bolder">Siaga Corona</h1>
                <h3 class="font-weight-light">Kabupaten Melawi</h3>
            </div>
            <div class="col-md-6 col-sm-12 d-none d-md-block">
                <img data-src="{{ asset('img/corona.png') }}" width="130%" class="lazyload banner-img" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card mt-n6">
        <div class="card-body my-2">
            <div class="row mx-0 mx-md-1">
                <div class="col-md-6 col-sm-12 mb-3 mb-md-0">
                    <div class="card bg-blue">
                        <div class="card-body text-center">
                            <h2 class="font-weight-normal text-white-sem">Total ODP</h2>
                            <h1 class="font-weight-bold text-white">{{ $stat['odp'] }}</h1>
                            {{-- <div class="d-none d-md-block"> --}}
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="font-weight-normal text-white-sem">Proses</h4>
                                    <h1 class="font-weight-bold text-white">{{ $stat['proccess'] }}</h1>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="font-weight-normal text-white-sem">Selesai</h4>
                                    <h1 class="font-weight-bold text-white">{{ $stat['done'] }}</h1>
                                </div>
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="card bg-yellow">
                        <div class="card-body text-center">
                            <h1 class="font-weight-normal text-white-sem">Total PDP</h1>
                            <h1 class="font-weight-bold text-white">{{ $stat['pdp'] }}</h1>
                            {{-- <div class="d-none d-md-block"> --}}
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="font-weight-normal text-white-sem">Dirawat</h4>
                                    <h1 class="font-weight-bold text-white">{{ $stat['treated'] }}</h1>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="font-weight-normal text-white-sem">Meninggal*</h4>
                                    <h1 class="font-weight-bold text-white">{{ $stat['died?'] }}</h1>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="font-weight-normal text-white-sem">Negatif</h4>
                                    <h1 class="font-weight-bold text-white">{{ $stat['negative'] }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-0 mx-md-1 mt-4">
                <div class="col-md-4 col-sm-12 mb-3 mb-md-0">
                    <div class="card bg-red">
                        <div class="card-body text-center">
                            <h2 class="font-weight-normal text-white-sem">Positif</h1>
                                <h1 class="font-weight-bold text-white">{{ $stat['positive'] }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mb-3 mb-md-0">
                    <div class="card bg-green">
                        <div class="card-body text-center">
                            <h2 class="font-weight-normal text-white-sem">Sembuh</h1>
                                <h1 class="font-weight-bold text-white">{{ $stat['recovered'] }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card bg-gray">
                        <div class="card-body text-center">
                            <h2 class="font-weight-normal text-white-sem">Meninggal</h1>
                                <h1 class="font-weight-bold text-white">{{ $stat['died+'] }}</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-0 mx-md-2 mt-3">
                <div class="col-md-6 col-sm-12 mb-2 mb-md-0">
                    <h4 class="">Keterangan</h4>
                    <h6 class="font-weight-normal">ODP : Orang dalam pemantauan.</h6>
                    <h6 class="font-weight-normal">PDP : Pasien dalam pengawasan.</h6>
                    <h6 class="font-weight-normal">Meninggal* : Pasien meninggal dan menunggu hasil tes COVID-19.
                    </h6>
                </div>
                <div class="col-md-6 col-sm-12 align-self-end">
                    <div class="card bg-dark w-100 w-md-50 float-right">
                        <div class="card-body m-n2 text-center">
                            <p class="text-white-sem d-inline">Diupdate {{ $stat['updated'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h1 class="text-center font-weight-bold mb-4">Tabel Kecamatan</h1>
        </div>
        <div class="col-md-12">
            <div class="card bg-white">
                <div class="card-body">
                    <table class="table table-hover table-responsive-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kecamatan</th>
                                <th scope="col">ODP</th>
                                <th scope="col">PDP</th>
                                <th scope="col">Positif</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            <tr>
                                @php
                                use \App\Http\Controllers\PublicController;
                                @endphp
                                <td>1</td>
                                <td>Sokan</td>
                                <td>{{ PublicController::getDistrictStat('0', '0') }}</td>
                                <td>{{ PublicController::getDistrictStat('0', '2') }}</td>
                                <td>{{ PublicController::getDistrictStat('0', '5') }}</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tanah Pinoh Barat</td>
                                <td>{{ PublicController::getDistrictStat('1', '0') }}</td>
                                <td>{{ PublicController::getDistrictStat('1', '2') }}</td>
                                <td>{{ PublicController::getDistrictStat('1', '5') }}</td>
                            </tr>
                            <tr class="">
                                <td>3</td>
                                <td>Tanah Pinoh</td>
                                <td>{{ PublicController::getDistrictStat('2', '0') }}</td>
                                <td>{{ PublicController::getDistrictStat('2', '2') }}</td>
                                <td>{{ PublicController::getDistrictStat('2', '5') }}</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Sayan</td>
                                <td>{{ PublicController::getDistrictStat('3', '0') }}</td>
                                <td>{{ PublicController::getDistrictStat('3', '2') }}</td>
                                <td>{{ PublicController::getDistrictStat('3', '5') }}</td>
                            </tr>
                            <tr class="">
                                <td>5</td>
                                <td>Belimbing Hulu</td>
                                <td>{{ PublicController::getDistrictStat('4', '0') }}</td>
                                <td>{{ PublicController::getDistrictStat('4', '2') }}</td>
                                <td>{{ PublicController::getDistrictStat('4', '5') }}</td>
                            </tr>
                            <tr class="">
                                <td>6</td>
                                <td>Belimbing</td>
                                <td>{{ PublicController::getDistrictStat('5', '0') }}</td>
                                <td>{{ PublicController::getDistrictStat('5', '2') }}</td>
                                <td>{{ PublicController::getDistrictStat('5', '5') }}</td>
                            </tr>
                            <tr class="">
                                <td>7</td>
                                <td>Pinoh Selatan</td>
                                <td>{{ PublicController::getDistrictStat('6', '0') }}</td>
                                <td>{{ PublicController::getDistrictStat('6', '2') }}</td>
                                <td>{{ PublicController::getDistrictStat('6', '5') }}</td>
                            </tr>
                            <tr class="">
                                <td>8</td>
                                <td>Nanga Pinoh</td>
                                <td>{{ PublicController::getDistrictStat('7', '0') }}</td>
                                <td>{{ PublicController::getDistrictStat('7', '2') }}</td>
                                <td>{{ PublicController::getDistrictStat('7', '5') }}</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Pinoh Utara</td>
                                <td>{{ PublicController::getDistrictStat('8', '0') }}</td>
                                <td>{{ PublicController::getDistrictStat('8', '2') }}</td>
                                <td>{{ PublicController::getDistrictStat('8', '5') }}</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Ella Hilir</td>
                                <td>{{ PublicController::getDistrictStat('9', '0') }}</td>
                                <td>{{ PublicController::getDistrictStat('9', '2') }}</td>
                                <td>{{ PublicController::getDistrictStat('9', '5') }}</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Menukung</td>
                                <td>{{ PublicController::getDistrictStat('10', '0') }}</td>
                                <td>{{ PublicController::getDistrictStat('10', '2') }}</td>
                                <td>{{ PublicController::getDistrictStat('10', '5') }}</td>
                            </tr>
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <div class="row mt-7">
        <div class="col-md-12 mb-3">
            <h1 class="text-center font-weight-bold mb-4">Tentang COVID-19</h1>
        </div>
        <div class="col-md-6">
            <video class="img-fluid" autoplay>
                <source src="{{ asset('video/covid-3.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="col-md-6 mt-4 mt-md-0 align-self-center">
            <div class="card bg-white">
                <div class="card-body">
                    <h2 class="font-weight-bold">Apa Itu COVID-19</h2>
                    <p class="text-justify">
                        Coronavirus Disease 2019 atau COVID-19 adalah penyakit baru yang dapat menyebabkan gangguan
                        pernapasan dan radang paru. Penyakit ini disebabkan oleh infeksi Severe Acute Respiratory
                        Syndrome
                        Coronavirus 2 (SARS-CoV-2). Gejala klinis yang muncul beragam, mulai dari seperti gejala flu
                        biasa
                        (batuk, pilek, nyeri tenggorok, nyeri otot, nyeri kepala) sampai yang berkomplikasi berat
                        (pneumonia
                        atau sepsis).
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card bg-white mt-4">
                <div class="card-body">
                    <h2 class="font-weight-bold">Bagaimana COVID-19 Menular ?</h2>
                    <p class="text-justify">COVID-19 adalah penyakit baru dan para peneliti masih mempelajari bagaimana
                        cara
                        penularannya. Dari
                        berbagai penelitian, metode penyebaran utama penyakit ini diduga adalah melalui droplet saluran
                        pernapasan dan kontak dekat dengan penderita. Droplet merupakan partikel kecil dari mulut
                        penderita
                        yang dapat mengandung virus penyakit, yang dihasilkan pada saat batuk, bersin, atau berbicara.
                        Droplet dapat melewati sampai jarak tertentu (biasanya 1 meter).
                        <br>
                        Droplet bisa menempel di pakaian atau benda di sekitar penderita pada saat batuk atau bersin.
                        Namun,
                        partikel droplet cukup besar sehingga tidak akan bertahan atau mengendap di udara dalam waktu
                        yang
                        lama. Oleh karena itu, orang yang sedang sakit, diwajibkan untuk menggunakan masker untuk
                        mencegah
                        penyebaran droplet. Untuk penularan melalui makanan, sampai saat ini belum ada bukti ilmiahnya.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6  mt-4">
            <div class="row">
                <div class="col-md-12 mt-md-0">
                    <div class="card bg-blue">
                        <div class="card-body">
                            <h3 class="text-center text-white font-weight-bold">Gejala COVID-19</h3>
                            <div class="row">
                                <div class="col-md-4 col-sm-12 text-center">
                                    <img class="img-fluid lazyload" data-src="{{ asset('img/1.png') }}"
                                        alt="Gejala Korona">
                                    <p class="text-white">Batuk dan Nyeri Tenggorok</p>
                                </div>
                                <div class="col-md-4 col-sm-12 text-center">
                                    <img class="img-fluid lazyload" data-src="{{ asset('img/2.png') }}"
                                        alt="Gejala Korona">
                                    <p class="text-white">Demam suhu tinggi / Ada riwayat demam</p>
                                </div>
                                <div class="col-md-4 col-sm-12 text-center">
                                    <img class="img-fluid lazyload" data-src="{{ asset('img/3.png') }}"
                                        alt="Gejala Korona">
                                    <p class="text-white">Sesak napas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-4" id="hubungikami">
            <div class="card bg-yellow">
                <div class="card-body text-center">
                    <h3 class="text-white font-weight-bold">Mengalami Gejala Tersebut ?</h3>
                    <img class="lazyload img-fluid mt-3" data-src="{{ asset('img/dokter.png') }}" alt="Gambar Dokter"
                        srcset="">
                    <a class="mt-3 btn btn-rounded btn-warning" href="tel:085350411537">
                        <h4 class="px-3 mb-0">Hubungi Hariyanto (085350411537)</h4>
                    </a>
                    <h4 class="text-white">atau</h4>
                    <a class="btn btn-rounded btn-warning" href="tel:082148659000">
                        <h4 class="px-3 mb-0">Hubungi Puspa (082148659000)</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('./service-worker.js');
    }
    $('#tes').click(function () {
        // hideMyInstallPromotion();
  // Show the install prompt
  deferredPrompt.prompt();
  // Wait for the user to respond to the prompt
  deferredPrompt.userChoice.then((choiceResult) => {
    if (choiceResult.outcome === 'accepted') {
      console.log('User accepted the install prompt');
    } else {
      console.log('User dismissed the install prompt');
    }
  })
    })
</script>
@endsection
