<table>
    <thead>
        <tr>
            <th><b>No</b></th>
            <th><b>Data Input</b></th>
            <th><b>Nama</b></th>
            <th><b>Status</b></th>
            <th><b>Umur</b></th>
            <th><b>Jenis Kelamin</b></th>
            <th><b>Kab/Kota</b></th>
            <th><b>Kecamatan</b></th>
            <th><b>Desa</b></th>
            <th><b>Jenis Transportasi</b></th>
            <th><b>Berkunjung Dari Negara</b></th>
            <th><b>Berkunjung Dari Daerah</b></th>
            <th><b>Lokasi Rawat</b></th>
            <th><b>Lama Pantau</b></th>
            <th><b>Tanggal PDP</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($people as $key=>$person)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ Carbon::create($person->created_at->toDateTimeString())->isoFormat('DD/MM/YY') }}</td>
            <td>{{ $person->name }}</td>
            <td>ODP</td>
            <td>{{ $person->age }}</td>
            <td>{{ ($person->gender == 'Laki-Laki') ? 'L' : 'P' }}</td>
            <td>Melawi</td>
            <td>{{ $person->district }}</td>
            <td>{{ $person->village }}</td>
            <td>{{ $person->vehicle }}</td>
            <td>indonesia</td>
            <td>{{ $person->track }}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
