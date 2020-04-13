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
                        <h1 class="font-weight-bolder text-main d-none d-md-block">{{ $post->title }}</h1>
                        <h3 class="font-weight-bolder text-main d-md-none d-sm-block">{{ $post->title }}</h3>
                        <p class="mt-3">Dinkes Melawi -
                            {{ Carbon::make($post->created_at)->locale('id_ID')->isoFormat('LLLL') }}</p>
                        <img class="img-fluid img-thumbnail" src="{{ asset('storage/'.$post->banner)}}" alt="">
                    </div>
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script charset="utf-8" src="//cdn.iframe.ly/embed.js?api_key=3869ef82f1d53f3d7930a9"></script>
<script>
    document.querySelectorAll( 'div[data-oembed-url]' ).forEach( element => {
        // Discard the static media preview from the database (empty the <div data-oembed-url="...">).
        while ( element.firstChild ) {
            element.removeChild( element.firstChild );
        }

        // Generate the media preview using Iframely.
        iframely.load( element, element.dataset.oembedUrl ) ;
    } );
</script>
@endsection
