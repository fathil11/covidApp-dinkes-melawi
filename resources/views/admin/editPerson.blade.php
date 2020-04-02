@extends('layouts.admin')
@section('title', 'Edit Orang')
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
                        <h4 class="card-title">Edit Orang</h4>
                        <p class="card-category">Mengubah data orang</p>
                    </div>
                    <div class="card-body">
                        <form action="/admin/orang/{{ $person->id }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="row mb-4 mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama</label>
                                        <input name="name" value="{{ $person->name }}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Umur</label>
                                        <input name="age" value="{{ $person->age }}" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group bmd-form-group">
                                        <div class="row">
                                            <div class="col-md-3 position-relative">
                                                <label class="bmd-label-floating d-md-none">Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-9 position-relative">
                                                <div class="form-check form-check-radio form-check-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            {{ $person->gender == "Laki-Laki" ? 'checked' : '' }}
                                                            id="inlineRadio1" value="m">
                                                        Laki-Laki
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-radio form-check-inline">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="gender"
                                                            {{ $person->gender == "Perempuan" ? 'checked' : '' }}
                                                            id="inlineRadio2" value="f">
                                                        Perempuan
                                                        <span class="circle">
                                                            <span class="check"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Alamat</label>
                                        <input name="address" value="{{ $person->address }}" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Kecamatan</label>
                                        <input name="district" value="{{ $person->district }}" id="district" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group bmd-form-group">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <h3>Status</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row justify-content-center mb-2">
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        {{ $person->status == "Pengawasan" ? 'checked' : '' }}
                                                                        id="inlineRadio1" value="0">
                                                                    PDP
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        {{ $person->status == "Aman" ? 'checked' : '' }}
                                                                        id="inlineRadio1" value="1">
                                                                    Selesai Pengawasan (Aman)
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center mb-2">
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        {{ $person->status == "Dirawat" ? 'checked' : '' }}
                                                                        id="inlineRadio2" value="2">
                                                                    ODP
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        {{ $person->status == "Negatif" ? 'checked' : '' }}
                                                                        id="inlineRadio2" value="3">
                                                                    Negatif (Pulang)
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        {{ $person->status == "Positif" ? 'checked' : '' }}
                                                                        id="inlineRadio2" value="5">
                                                                    Positif
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        {{ $person->status == "Sembuh" ? 'checked' : '' }}
                                                                        id="inlineRadio2" value="7">
                                                                    Sembuh
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        {{ $person->status == "Meninggal?" ? 'checked' : '' }}
                                                                        id="inlineRadio2" value="4">
                                                                    Meninggal ?
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        {{ $person->status == "Meninggal+" ? 'checked' : '' }}
                                                                        id="inlineRadio2" value="6">
                                                                    Meninggal Positif
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        {{ $person->status == "Meninggal-" ? 'checked' : '' }}
                                                                        id="inlineRadio2" value="8">
                                                                    Meninggal Negatif
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-block mt-4">Edit</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
