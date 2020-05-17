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
                <div class="col-md-6 col-sm-12 mb-3 mb-md-0">
                    <div class="card bg-blue">
                        <div class="card-body text-center">
                            <h2 class="font-weight-normal text-white-sem">Total OTG</h2>
                            <h1 class="font-weight-bold text-white">{{ $stat['otg'] }}</h1>
                            {{-- <div class="d-none d-md-block"> --}}
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="font-weight-normal text-white-sem">Proses</h4>
                                    <h1 class="font-weight-bold text-white">{{ $stat['otgProc'] }}</h1>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="font-weight-normal text-white-sem">Selesai</h4>
                                    <h1 class="font-weight-bold text-white">{{ $stat['otgDone'] }}</h1>
                                </div>
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 mt-0 mt-md-3">
                    <div class="card bg-yellow">
                        <div class="card-body text-center">
                            <h1 class="font-weight-normal text-white-sem">Total PDP</h1>
                            {{-- <h1 class="font-weight-bold text-white">{{ $stat['pdp'] }}</h1> --}}
                            <h1 class="font-weight-bold text-white">3</h1>
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
                            <h2 class="font-weight-normal text-white-sem">Terkonfirmasi</h1>
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
        <div class="col-md-6 col-sm-12 text-center">
            <h1>Peta Persebaran</h1>
            <img class="lazyload img-fluid mt-2 rounded" src="{{ asset('img/maps/maps.jpg') . "?dummy=6" }}" alt="">
        </div>
        <div class="col-md-6 col-sm-12 mt-4 mt-md-0">
            <div class="card bg-white">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr class="w-100">
                                    <th scope="col" class="align-middle">#</th>
                                    <th scope="col" class="align-middle">Kecamatan</th>
                                    <th scope="col" class="align-middle bg-blue text-center">ODP</th>
                                    <th scope="col" class="align-middle bg-blue text-center">OTG</th>
                                    <th scope="col" class="align-middle bg-warning text-center">PDP</th>
                                    <th scope="col" class="align-middle bg-success text-center">Negatif</th>
                                    <th scope="col" class="align-middle bg-danger text-center">Positif</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                <tr class="text-center">
                                    @php
                                    use \App\Http\Controllers\PublicController;
                                    @endphp
                                    <td>1</td>
                                    <td>Sokan</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('0')['odp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('0')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('0')['otgProc'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('0')['done'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('0')['pdp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('0')['treated'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('0')['died?'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('0')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('0')['positive'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('0')['recovered'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('0')['died+'] }}</td> --}}
                                </tr>
                                <tr class="text-center">
                                    <td>2</td>
                                    <td>Tanah Pinoh Barat</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('1')['odp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('1')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('1')['otgProc'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('1')['done'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('1')['pdp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('1')['treated'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('1')['died?'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('1')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('1')['positive'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('1')['recovered'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('1')['died+'] }}</td> --}}
                                </tr>
                                <tr class="text-center">
                                    <td>3</td>
                                    <td>Tanah Pinoh</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('2')['odp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('2')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('2')['otgProc'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('2')['done'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('2')['pdp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('2')['treated'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('2')['died?'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('2')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('2')['positive'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('2')['recovered'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('2')['died+'] }}</td> --}}
                                </tr>
                                <tr class="text-center">
                                    <td>4</td>
                                    <td>Sayan</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('3')['odp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('3')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('3')['otgProc'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('3')['done'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('3')['pdp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('3')['treated'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('3')['died?'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('3')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('3')['positive'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('3')['recovered'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('3')['died+'] }}</td> --}}
                                </tr>
                                <tr class="text-center">
                                    <td>5</td>
                                    <td>Belimbing Hulu</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('4')['odp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('4')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('4')['otgProc'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('4')['done'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('4')['pdp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('4')['treated'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('4')['died?'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('4')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('4')['positive'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('4')['recovered'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('4')['died+'] }}</td> --}}
                                </tr>
                                <tr class="text-center">
                                    <td>6</td>
                                    <td>Belimbing</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('5')['odp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('5')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('5')['otgProc'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('5')['done'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('5')['pdp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('5')['treated'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('5')['died?'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('5')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('5')['positive'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('5')['recovered'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('5')['died+'] }}</td> --}}
                                </tr>
                                <tr class="text-center">
                                    <td>7</td>
                                    <td>Pinoh Selatan</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('6')['odp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('6')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('6')['otgProc'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('6')['done'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('6')['pdp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('6')['treated'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('6')['died?'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('6')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('6')['positive'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('6')['recovered'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('6')['died+'] }}</td> --}}
                                </tr>
                                <tr class="text-center">
                                    <td>8</td>
                                    <td>Nanga Pinoh</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('7')['odp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('7')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('7')['otgProc'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('7')['done'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('7')['pdp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('7')['treated'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('7')['died?'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('7')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('7')['positive'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('7')['recovered'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('7')['died+'] }}</td> --}}
                                </tr>
                                <tr class="text-center">
                                    <td>9</td>
                                    <td>Pinoh Utara</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('8')['odp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('8')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('8')['otgProc'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('8')['done'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('8')['pdp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('8')['treated'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('8')['died?'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('8')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('8')['positive'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('8')['recovered'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('8')['died+'] }}</td> --}}
                                </tr>
                                <tr class="text-center">
                                    <td>10</td>
                                    <td>Ella Hilir</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('9')['odp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('9')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('9')['otgProc'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('9')['done'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('9')['pdp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('9')['treated'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('9')['died?'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('9')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('9')['positive'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('9')['recovered'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('9')['died+'] }}</td> --}}
                                </tr>
                                <tr class="text-center">
                                    <td>11</td>
                                    <td>Menukung</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('10')['odp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('10')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('10')['otgProc'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('10')['done'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('10')['pdp'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('10')['treated'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('10')['died?'] }}</td> --}}
                                    <td>{{ PublicController::getDistrictStat('10')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('10')['positive'] }}</td>
                                    {{-- <td>{{ PublicController::getDistrictStat('10')['recovered'] }}</td> --}}
                                    {{-- <td>{{ PublicController::getDistrictStat('10')['died+'] }}</td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h1 class="text-center font-weight-bold mb-4">Detail Tabel Kecamatan</h1>
        </div>
        <div class="col-md-12">
            <div class="card bg-white">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr class="w-100">
                                    <th scope="col" class="align-middle">#</th>
                                    <th scope="col" class="align-middle">Kecamatan</th>
                                    <th scope="col" class="align-middle bg-blue text-center">Jumlah ODP</th>
                                    <th scope="col" class="align-middle bg-blue text-center">Sedang ODP</th>
                                    <th scope="col" class="align-middle bg-blue text-center">Selesai ODP</th>
                                    <th scope="col" class="align-middle bg-yellow text-center">Jumlah PDP</th>
                                    <th scope="col" class="align-middle bg-yellow text-center">Dirawat</th>
                                    <th scope="col" class="align-middle bg-yellow text-center">Meninggal*</th>
                                    <th scope="col" class="align-middle bg-yellow text-center">Negatif</th>
                                    <th scope="col" class="align-middle bg-red text-center">Terkonfirmasi</th>
                                    <th scope="col" class="align-middle bg-green text-center">Sembuh</th>
                                    <th scope="col" class="align-middle bg-gray text-center">Meninggal+</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Sokan</td>
                                    <td>{{ PublicController::getDistrictStat('0')['odp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('0')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('0')['done'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('0')['pdp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('0')['treated'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('0')['died?'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('0')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('0')['positive'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('0')['recovered'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('0')['died+'] }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>2</td>
                                    <td>Tanah Pinoh Barat</td>
                                    <td>{{ PublicController::getDistrictStat('1')['odp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('1')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('1')['done'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('1')['pdp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('1')['treated'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('1')['died?'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('1')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('1')['positive'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('1')['recovered'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('1')['died+'] }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>3</td>
                                    <td>Tanah Pinoh</td>
                                    <td>{{ PublicController::getDistrictStat('2')['odp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('2')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('2')['done'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('2')['pdp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('2')['treated'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('2')['died?'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('2')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('2')['positive'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('2')['recovered'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('2')['died+'] }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>4</td>
                                    <td>Sayan</td>
                                    <td>{{ PublicController::getDistrictStat('3')['odp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('3')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('3')['done'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('3')['pdp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('3')['treated'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('3')['died?'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('3')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('3')['positive'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('3')['recovered'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('3')['died+'] }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>5</td>
                                    <td>Belimbing Hulu</td>
                                    <td>{{ PublicController::getDistrictStat('4')['odp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('4')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('4')['done'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('4')['pdp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('4')['treated'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('4')['died?'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('4')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('4')['positive'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('4')['recovered'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('4')['died+'] }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>6</td>
                                    <td>Belimbing</td>
                                    <td>{{ PublicController::getDistrictStat('5')['odp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('5')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('5')['done'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('5')['pdp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('5')['treated'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('5')['died?'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('5')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('5')['positive'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('5')['recovered'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('5')['died+'] }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>7</td>
                                    <td>Pinoh Selatan</td>
                                    <td>{{ PublicController::getDistrictStat('6')['odp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('6')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('6')['done'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('6')['pdp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('6')['treated'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('6')['died?'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('6')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('6')['positive'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('6')['recovered'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('6')['died+'] }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>8</td>
                                    <td>Nanga Pinoh</td>
                                    <td>{{ PublicController::getDistrictStat('7')['odp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('7')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('7')['done'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('7')['pdp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('7')['treated'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('7')['died?'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('7')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('7')['positive'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('7')['recovered'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('7')['died+'] }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>9</td>
                                    <td>Pinoh Utara</td>
                                    <td>{{ PublicController::getDistrictStat('8')['odp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('8')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('8')['done'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('8')['pdp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('8')['treated'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('8')['died?'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('8')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('8')['positive'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('8')['recovered'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('8')['died+'] }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>10</td>
                                    <td>Ella Hilir</td>
                                    <td>{{ PublicController::getDistrictStat('9')['odp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('9')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('9')['done'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('9')['pdp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('9')['treated'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('9')['died?'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('9')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('9')['positive'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('9')['recovered'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('9')['died+'] }}</td>
                                </tr>
                                <tr class="text-center">
                                    <td>11</td>
                                    <td>Menukung</td>
                                    <td>{{ PublicController::getDistrictStat('10')['odp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('10')['proccess'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('10')['done'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('10')['pdp'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('10')['treated'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('10')['died?'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('10')['negative'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('10')['positive'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('10')['recovered'] }}</td>
                                    <td>{{ PublicController::getDistrictStat('10')['died+'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row mt-7">
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
