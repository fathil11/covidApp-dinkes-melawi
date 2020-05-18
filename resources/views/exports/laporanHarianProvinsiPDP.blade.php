<table>
    <thead>
        <tr>
            <th><b>No</b></th>
            <th><b>Data Input</b></th>
            <th><b>Nama</b></th>
            <th><b>Status</b></th>
            <th><b>Umur</b></th>
            <th><b>Jenis Kelamin</b></th>
            <th><b>Alamat Lengkap</b></th>
            <th><b>Kab/Kota</b></th>
            <th><b>Kecamatan</b></th>
            <th><b>Desa</b></th>
            <th><b>Jenis Transportasi</b></th>
            <th><b>Berkunjung Dari Negara</b></th>
            <th><b>Berkunjung Dari Daerah</b></th>
            <th><b>Lokasi Rawat</b></th>
            <th><b>Tanggal Positif</b></th>
            <th><b>Tanggal Negatif</b></th>
            <th><b>Tanggal Meninggal</b></th>
            <th><b>Keterangan Pasien</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($people as $key=>$person)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ Carbon::create($person->created_at->toDateTimeString())->isoFormat('DD/MM/YY') }}</td>
            <td>{{ $person->name }}</td>
            <td>PDP</td>
            <td>{{ $person->age }}</td>
            <td>{{ ($person->gender == 'm') ? 'L' : 'P' }}</td>
            <td>{{ $person->sub_village }}</td>
            <td>Melawi</td>
            <td>{{ $person->district }}</td>
            <td>{{ $person->village }}</td>
            <td>{{ $person->vehicle }}</td>
            <td>indonesia</td>
            <td>{{ $person->track }}</td>
            <td></td>
            @php
            $positiveDate = "";
            $negativeDate = "";
            $deadDate = "";
            foreach ($person->logs as $log) {
            if($log->status == 5){
            $positiveDate = $log->created_at;
            }elseif ($log->status == 3) {
            $negativeDate = $log->created_at;
            }elseif($log->status == 4 || $log->status == 6 || $log->status == 8){
            $deadDate = $log->created_at;
            }
            }
            @endphp
            <td>{{ Carbon::create($positiveDate->toDateTimeString())->isoFormat('DD/MM/YY') }}</td>
            <td>{{ Carbon::create($negativeDate->toDateTimeString())->isoFormat('DD/MM/YY') }}</td>
            <td>{{ Carbon::create($deadDate->toDateTimeString())->isoFormat('DD/MM/YY') }}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
