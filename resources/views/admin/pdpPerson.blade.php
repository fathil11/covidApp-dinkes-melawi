@extends('layouts.admin')
@section('title', 'Daftar PDP')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-info">
                        <h4 class="card-title ">Daftar Pasien Dalam Pengawasan</h4>
                        <p class="card-category">Total : 120 Orang</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-info">
                                    <th class="text-center">
                                        ID
                                    </th>
                                    <th class="text-center">
                                        Nama
                                    </th>
                                    <th class="text-center">
                                        Umur
                                    </th>
                                    <th class="text-center">
                                        Jenis Kelamin
                                    </th>
                                    <th class="text-center">
                                        Status
                                    </th>
                                    <th class="text-center">
                                        Aksi
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td class="text-center">
                                            Sukri Niam
                                        </td>
                                        <td class="text-center">
                                            23
                                        </td>
                                        <td class="text-center">
                                            Laki-laki
                                        </td>
                                        <td class="text-center">
                                            Positif
                                        </td>
                                        <td class="td-actions text-center text-white">
                                            <a href="" type="button" rel="tooltip" class="btn btn-danger">
                                                Positif
                                            </a>
                                            <a href="" type="button" rel="tooltip" class="btn btn-success">
                                                Negatif
                                            </a>
                                            <a href="" type="button" rel="tooltip" class="btn btn-warning">
                                                Meninggal
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
