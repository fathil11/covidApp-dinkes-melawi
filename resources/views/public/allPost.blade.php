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
    <div class="col-md-12 mt-5">
        <h1 class="display-4 text-center">Berita</h1>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
            <div class="card">
                <div class="position-relative">
                    <div class="tgl py-2 px-4 position-absolute">
                        <h5 class="text-center">21</h5>
                        <h6 class="text-center">Okt</h6>
                    </div>
                </div>
                <img src="{{ asset('storage/blog-banners/9mJNHqz1enDpojLHDFBjV5I9ws39E7uOMJIBHwcj.jpeg') }}"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Hari ini telah terjadi di Posko 2010</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
