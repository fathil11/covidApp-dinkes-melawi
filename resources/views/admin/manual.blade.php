@extends('layouts.admin')
@section('title', 'Tambah Orang')
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
                        <h4 class="card-title">Menu Manual</h4>
                        <p class="card-category">Entri data COVID-19 manual</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/manual') }}" method="post" autocomplete="off">
                            @csrf
                            @method('POST')
                            <div class="row mb-4 mt-3">
                                <div class="col-12">
                                    <h5>OTG</h5>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Belum Tes</label>
                                        <input name="otg_pre" value="{{ $manual->otg_pre }}" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Menunggu Hasil</label>
                                        <input name="otg_waiting" value="{{ $manual->otg_waiting }}" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Negatif</label>
                                        <input name="otg_negative" value="{{ $manual->otg_negative }}" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Positif</label>
                                        <input name="otg_positive" value="{{ $manual->otg_positive }}" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 mt-3">
                                <div class="col-12">
                                    <h5>Reaktif</h5>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Belum Tes</label>
                                        <input name="reactive_pre" value="{{ $manual->reactive_pre }}" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Menunggu Hasil</label>
                                        <input name="reactive_waiting" value="{{ $manual->reactive_waiting }}"
                                            type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Negatif</label>
                                        <input name="reactive_negative" value="{{ $manual->reactive_negative }}"
                                            type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Positif</label>
                                        <input name="reactive_positive" value="{{ $manual->reactive_positive }}"
                                            type="number" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 mt-3">
                                <div class="col-12">
                                    <h5>PDP</h5>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Dirawat</label>
                                        <input name="pdp_process" value="{{ $manual->pdp_process }}" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Meninggal ?</label>
                                        <input name="pdp_died_unknown" value="{{ $manual->pdp_died_unknown }}"
                                            type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Negatif</label>
                                        <input name="pdp_negative" value="{{ $manual->pdp_negative }}" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Positif</label>
                                        <input name="pdp_positive" value="{{ $manual->pdp_positive }}" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 mt-3">
                                <div class="col-12">
                                    <h5>Lainnya</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sembuh</label>
                                        <input name="healed" value="{{ $manual->healed }}" type="number"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Meninggal Positif</label>
                                        <input name="died_positive" value="{{ $manual->died_positive }}" type="number"
                                            class="form-control">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-info btn-block mt-4">Simpan</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
