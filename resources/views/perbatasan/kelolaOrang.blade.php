@extends('layouts.perbatasan')
@section('title', 'Kelola Orang')
@section('content')
<div class="row">
    <div class="col s12 m12">
        <table class="centered nowrap" id="all_table" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelamin</th>
                    <th>No Hp</th>
                    <th>Kecamatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($people as $key=>$person)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->gender }}</td>
                    <td>{{ $person->phone }}</td>
                    <td>{{ $person->district }}</td>
                    <td>
                        {{-- <form action="/admin-perbatasan/edit/{{ $person->id }}" method="post">@csrf @method('post')
                        <button class="btn orange waves-effect" type="submit">Edit</button>
                        </form> --}}
                        <div class="row">
                            <div class="flexbox">
                                <div class="col">
                                    <form action="/admin-perbatasan/enter/{{ $person->id }}" method="post">@csrf
                                        @method('post')
                                        <button class="btn green waves-effect" type="submit">Catat</button>
                                    </form>
                                </div>
                                <div class="col">
                                    <form action="/admin-perbatasan/delete/{{ $person->id }}" method="post">@csrf
                                        @method('delete')
                                        <button class="btn red waves-effect" type="submit">Hapus</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
@section('js')
<script src="{{ asset('js/admin/jquery.dataTables.min.js') }}"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function () {
        $('#all_table').DataTable({
            "responsive": {
                details: {
                    type: 'column',
                    target: 'tr'
                }
            },
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
@if (session('msg'))
<script>
    M.toast({html: 'Berhasil Hapus Data' })
</script>
@endif
@if (session('enter'))
<script>
    M.toast({html: 'Berhasil Mencatat Orang' })
</script>
@endif
@endsection
