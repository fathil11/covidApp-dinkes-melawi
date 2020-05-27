@extends('layouts.admin')
@section('title', 'Kelola Peta')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title">Peta</h4>
                        <p class="card-category">Update peta COVID-19 Melawi</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/peta') }}" method="post" autocomplete="off"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row mb-4 mt-3">
                                <div class="col-md-12">
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <input type="file" name="map" multiple="" class="inputFileHidden"
                                            accept="image/*">
                                        <div class=" input-group">
                                            <input type="text" class="form-control inputFileVisible"
                                                placeholder="Upload peta ...">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-fab btn-round btn-info"
                                                    id="btnFile">
                                                    <i class="material-icons">attach_file</i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-block mt-4">Update</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $('#btnFile').click(function() {
    $('.inputFileHidden').trigger('click');
    });

    $('.form-file-upload .inputFileVisible').click(function() {
    $('.inputFileHidden').trigger('click');
    });

    $('.form-file-upload .inputFileHidden').change(function() {
    var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
    $('.inputFileVisible').val(filename);
    });
</script>
@endsection
