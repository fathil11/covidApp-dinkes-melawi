@extends('layouts.admin')
@section('title', 'Daftar OTG')
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
                        <h4 class="card-title ">Daftar Orang Tanpa Gejala</h4>
                        <p class="card-category">Total : {{ $people->count() }} Orang</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="pdp_table">
                                <thead class=" text-info">
                                    <th class="text-center">
                                        No
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
                                        Rapid
                                    </th>
                                    <th class="text-center">
                                        Aksi
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($people as $key=>$person)
                                    <tr class="{{ $person->logs->last()->status == 9 ? 'bg-warning' : '' }}">
                                        <td class="text-center">
                                            {{ $key + 1 }}
                                        </td>
                                        <td class="text-center">
                                            {{ $person->name }}
                                        </td>
                                        <td class="text-center">
                                            {{ $person->age }}
                                        </td>
                                        <td class="text-center">
                                            {{ $person->gender }}
                                        </td>
                                        <td class="text-center">
                                            @if ($person->logs->last()->status == 9)
                                            Reaktif
                                            @elseif($person->logs->last()->status == 10)
                                            Non Reaktif
                                            @else
                                            ?
                                            @endif
                                        </td>
                                        <td class="td-actions text-center text-white">
                                            @if ($person->logs->last()->status == 10)
                                            <a href="/admin/orang/{{ $person->id }}/reaktif" type="button" rel="tooltip"
                                                class="btn btn-info">
                                                Reaktif
                                            </a>
                                            @elseif($person->logs->last()->status == 9)
                                            <a href="/admin/orang/{{ $person->id }}/non-reaktif" type="button"
                                                rel="tooltip" class="btn btn-info">
                                                Non Reaktif
                                            </a>
                                            @else
                                            <a href="/admin/orang/{{ $person->id }}/reaktif" type="button" rel="tooltip"
                                                class="btn btn-info">
                                                Reaktif
                                            </a>
                                            <a href="/admin/orang/{{ $person->id }}/non-reaktif" type="button"
                                                rel="tooltip" class="btn btn-info">
                                                Non Reaktif
                                            </a>
                                            @endif
                                            <a href="/admin/orang/{{ $person->id }}/odp" type="button" rel="tooltip"
                                                class="btn btn-primary">
                                                ODP
                                            </a>
                                            <a href="/admin/orang/{{ $person->id }}/pdp" type="button" rel="tooltip"
                                                class="btn btn-warning">
                                                PDP
                                            </a>
                                            <a href="/admin/orang/{{ $person->id }}/positif" type="button" rel="tooltip"
                                                class="btn btn-danger">
                                                Pos
                                            </a>
                                            <a href="/admin/orang/{{ $person->id }}/negatif" type="button" rel="tooltip"
                                                class="btn btn-success">
                                                Neg
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
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
@section('js')
<script>
    $(document).ready(function () {
        $('#pdp_table').DataTable({
            "columnDefs": [{
                "targets": 4,
                "orderable": false
            }],
            "language": {
                "emptyTable": "Belum ada data",
                "search": "Cari : ",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Kembali"
                },
                "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                "infoEmpty": "",
                "zeroRecords": "Tidak ada daya yang sesuai",
                "lengthMenu": "Tampilkan _MENU_ data",
            },
        });
    });
</script>
@endsection
