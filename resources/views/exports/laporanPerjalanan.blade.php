<table>
    <thead>
        <tr>
            <th><b>No</b></th>
            <th><b>Nama</b></th>
            <th><b>Umur</b></th>
            <th><b>Jenis Kelamin</b></th>
            <th><b>Desa</b></th>
            <th><b>Kecamatan</b></th>
            <th><b>Dusun</b></th>
            <th><b>Nomor HP</b></th>
            <th><b>Berkunjung Dari</b></th>
            <th><b>Kendaraan</b></th>
            <th><b>Waktu Masuk</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($people as $key=>$person)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $person->name }}</td>
            <td>{{ $person->age }}</td>
            <td>{{ $person->gender }}</td>
            <td>{{ $person->village }}</td>
            <td>{{ $person->district }}</td>
            <td>{{ $person->sub_village }}</td>
            <td>{{ $person->phone }}</td>
            <td>{{ $person->track }}</td>
            <td>{{ $person->vehicle }}</td>
            <td>{{ Carbon::create($person->created_at->toDateTimeString())->locale('id') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
