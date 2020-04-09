@extends('layouts.public')
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
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-body px-sm-2 px-md-5 pt-5">
                    <div class="text-center mb-4">
                        <h1 class="font-weight-bolder">Hubungi Kami</h1>
                        <h3 class="mt-3">Call Center</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mt-md-5">
                                <h4 class="mb-3 font-weight-bolder">Hariyanto</h4>
                                <h4 class="mt-n2">085350411537</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <a class="btn btn-primary btn-block btn-rounded" href="tel:085350411537">
                                            Telfon
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a target="_blank" class="btn btn-success btn-block btn-rounded"
                                            href="https://wa.me/085350411537">
                                            Whatsapp
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-3 mt-5 font-weight-bolder">Puspa</h4>
                                <h4 class="mt-n2">082148659000</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <a class="btn btn-primary btn-block btn-rounded" href="tel:082148659000">
                                            Telfon
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a target="_blank" class="btn btn-success btn-block btn-rounded"
                                            href="https://wa.me/082148659000">
                                            Whatsapp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
