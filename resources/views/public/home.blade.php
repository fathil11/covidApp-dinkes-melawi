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
                <div class="col-md-12 col-sm-12 mb-3 mb-md-0">
                    <div class="card bg-red">
                        <div class="card-body text-center">
                            <h2 class="font-weight-normal text-white-sem">Total Konfirmasi</h2>
                            <h1 class="font-weight-bold text-white">{{ $data['Total Konfirmasi'] }}</h1>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="font-weight-normal text-white-sem">Konfirmasi Isolasi</h4>
                                    <h1 class="font-weight-bold text-white">{{ $data['Konfirmasi Isolasi'] }}</h1>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="font-weight-normal text-white-sem">Konfirmasi Sembuh</h4>
                                    <h1 class="font-weight-bold text-white">{{ $data['Konfirmasi Sembuh'] }}</h1>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="font-weight-normal text-white-sem">Konfirmasi Meninggal</h4>
                                    <h1 class="font-weight-bold text-white">{{ $data['Konfirmasi Meninggal'] }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-0 mx-md-1 mt-4">
                <div class="col-12 mb-3 mb-md-0">
                    <div class="card bg-yellow">
                        <div class="card-body text-center">
                            <h2 class="font-weight-normal text-white-sem">Total Suspek</h2>
                            <h1 class="font-weight-bold text-white">{{ $data['Total Suspek'] }}</h1>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                <h4 class="font-weight-normal text-white-sem">Suspek Dirawat</h4>
                                    <h1 class="font-weight-bold text-white">{{ $data['Suspek Dirawat'] }}</h1>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="font-weight-normal text-white-sem">Discarded</h4>
                                    <h1 class="font-weight-bold text-white">{{ $data['Discarded'] }}</h1>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="font-weight-normal text-white-sem">Probable</h4>
                                    <h1 class="font-weight-bold text-white">{{ $data['Probable'] }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mx-0 mx-md-1 mt-4">
                <div class="col-12 mb-3 mb-md-0">
                    <div class="card bg-blue">
                        <div class="card-body text-center">
                            <h2 class="font-weight-normal text-white-sem">Kontak Erat</h2>
                            <h1 class="font-weight-bold text-white">{{ $data['Kontak Erat'] }}</h1>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row mx-0 mx-md-1 mt-4">
                <div class="col-md-4 col-sm-12 mb-3 mb-md-0">
                    <div class="card bg-red">
                        <div class="card-body text-center">
                            <h2 class="font-weight-normal text-white-sem">Terkonfirmasi</h1>
                                <h1 class="font-weight-bold text-white">{{ 0 }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 mb-3 mb-md-0">
                    <div class="card bg-green">
                        <div class="card-body text-center">
                            <h2 class="font-weight-normal text-white-sem">Sembuh</h1>
                                <h1 class="font-weight-bold text-white">{{ 0 }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card bg-gray">
                        <div class="card-body text-center">
                            <h2 class="font-weight-normal text-white-sem">Meninggal</h1>
                                <h1 class="font-weight-bold text-white">{{ 0 }}</h1>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row mx-0 mx-md-2 mt-3">
                <div class="col-md-6 col-sm-12 mb-2 mb-md-0">
                    <h4 class="">Keterangan</h4>
                    <h6 class="font-weight-normal"><b>Discarded</b> : Suspek yang sudah sembuh.</h6>
                    <h6 class="font-weight-normal"><b>Probable</b> : Orang yang diyakini sebagai suspek dengan ISPA Berat atau gagal nafas akibat aveoli paru-paru penuh cairan (ARDS) atau meninggal dengan gambaran klinis yang meyakinkan COVID-19 DAN belum ada hasil pemeriksaan laboratorium RT-PCR.</h6>
                    </h6>
                </div>
                <div class="col-md-6 col-sm-12 align-self-end">
                    <div class="card bg-dark w-100 w-md-50 float-right">
                        <div class="card-body m-n2 text-center">
                            <p class="text-white-sem d-inline">Diupdate {{ $data['Update'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row mt-5">
        <div class="col-md-12 col-sm-12 text-center">
            <h1>Peta Persebaran</h1>
            <img id="map" class="img-fluid mt-2 rounded" src="{{ asset('storage/map/maps.jpg')}}" alt="">
        </div>
    </div> --}}

    <div class="row mt-5">
        <div class="col-md-12 mb-3">
            <h1 class="text-center font-weight-bold mb-4">Tentang COVID-19</h1>
        </div>
        <div class="col-md-6">
            <video class="img-fluid" muted autoplay>
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
                        <h4 class="px-3 mb-0">Hubungi Puspawati (082148659000)</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script language="javascript" type="text/javascript">
    var d = new Date();
    document.getElementById("map").src =
      "https://covid.dinkesmelawi.com/storage/map/maps.jpg?ver=" +
       d.getTime();
</script>
@endsection
