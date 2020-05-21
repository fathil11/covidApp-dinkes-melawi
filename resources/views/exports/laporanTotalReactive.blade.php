<table>
    <thead>
        <tr>
            <th><b>No</b></th>
            <th><b>Nama</b></th>
            <th><b>Umur</b></th>
            <th><b>Jenis Kelamin</b></th>
            <th><b>Kecamatan</b></th>
            <th><b>Desa</b></th>
            <th><b>Alamat Lengkap</b></th>
            <th><b>Nomor HP</b></th>
            <th><b>Gejala</b></th>
            <th><b>Status</b></th>
            <th><b>Waktu</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($people as $key=>$person)
        @if ($person->logs->last()->status == 9)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $person->name }}</td>
            <td>{{ $person->age }}</td>
            <td>{{ $person->gender }}</td>
            <td>{{ $person->district }}</td>
            <td>{{ $person->village }}</td>
            <td>{{ $person->sub_village }}</td>
            <td>{{ $person->phone }}</td>
            <td>{{ $person->phenomenon }}</td>
            <td>
                @if ($person->logs->last()->status == 9)
                Reaktif
                @else
                ?
                @endif
            </td>
            <td>{{ Carbon::create($person->created_at->toDateTimeString())->locale('id') }}</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
