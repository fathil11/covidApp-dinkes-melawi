@extends('layouts.perbatasan')
@section('title', 'Tambah Orang')
@section('content')
<div class="row">
    <form action="/admin-puskesmas/store" method="post" autocomplete="off">
        @csrf
        @method('POST')

        <div class="input-field col s9 m9">
            <input name="name" id="name" type="text" class="validate" value="{{ old('name') }}">
            <label for="name">Nama</label>
        </div>
        <div class="input-field col s3 m3">
            <input name="age" id="age" type="number" class="validate" value="{{ old('age') }}">
            <label for="age">Umur</label>
        </div>
        <div class="input-field col s12 m12">
            <input name="phone" type="tel" id="phone" class="validate" value="{{ old('phone') }}">
            <label for="phone">Nomor Hp</label>
        </div>
        <div class="col s12 m12">
            <div class="center">
                <h5>Jenis Kelamin</h5>
            </div>
            <label>
                <input name="gender" type="radio" value="m" {{ old('gender') == "m" ? 'checked' : '' }} />
                <span>Laki-Laki</span>
            </label>
            </p>
            <p>
                <label>
                    <input name="gender" type="radio" value="f" {{ old('gender') == "f" ? 'checked' : '' }} />
                    <span>Perempuan</span>
                </label>
            </p>
        </div>
        <div class="input-field col s12 m12">
            <input name="track" id="track" type="text" class="" value="{{ old('track') }}">
            <label for="track">Asal</label>
        </div>
        <div class="input-field col s12 m12">
            <input name="vehicle" id="vehicle" type="text" class="" value="{{ old('vehicle') }}">
            <label for="vehicle">Kendaraan</label>
        </div>
        <div class="center">
            <h5>Alamat</h5>
        </div>
        <div class="input-field col s6 m6">
            <input name="district" id="district" type="text" class="district" value="{{ old('district') }}">
            <label for="district">Kecamatan</label>
        </div>
        <div class="input-field col s6 m6">
            <input name="village" id="village" type="text" class="village" value="{{ old('village') }}">
            <label for="village">Desa</label>
        </div>
        <div class="input-field col s12 m12">
            <input name="sub_village" id="sub_village" type="text" class="" value="{{ old('sub_village') }}">
            <label for="sub_village">Alamat Lengkap / Dusun</label>
        </div>
        <div class="col s12 m12">
            <div class="center">
                <h5>Status</h5>
            </div>
            <p>
                <label>
                    <input name="transmission" type="radio" value="1"
                        {{ old('transmission') == "1" ? 'checked' : '' }} />
                    <span>Transmisi</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="transmission" type="radio" value="0"
                        {{ old('transmission') == "0" ? 'checked' : '' }} />
                    <span>Non-Transmisi</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="transmission" type="radio" value="2"
                        {{ old('transmission') == "2" ? 'checked' : '' }} />
                    <span>Pelaku Perjalanan</span>
                </label>
            </p>
        </div>
        <div class="col s12 m12">
            <div class="center">
                <h5>Gejala</h5>
            </div>
            <div class="input-field col s12 m12">
                <input name="temperature" id="temperature" step="any" type="number" value="{{ old('temperature') }}">
                <label for="temperature">Suhu Tubuh</label>
            </div>
            <p>
                <label>
                    <input type="checkbox" name="phenomenon[]" value="Demam" class="filled-in" @if(old('phenomenon') &&
                        in_array('Demam', old('phenomenon'))) checked @endif />
                    <span>Demam</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" name="phenomenon[]" value="Batuk" class="filled-in" @if(old('phenomenon') &&
                        in_array('Batuk', old('phenomenon'))) checked @endif />
                    <span>Batuk</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" name="phenomenon[]" value="Sesak" class="filled-in" @if(old('phenomenon') &&
                        in_array('Sesak', old('phenomenon'))) checked @endif />
                    <span>Sesak</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" name="phenomenon[]" value="Nyeri Sendi" class="filled-in"
                        @if(old('phenomenon') && in_array('Nyeri Sendi', old('phenomenon'))) checked @endif />
                    <span>Nyeri Sendi</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" name="phenomenon[]" value="Pilek" class="filled-in" @if(old('phenomenon') &&
                        in_array('Pilek', old('phenomenon'))) checked @endif />
                    <span>Pilek</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" name="phenomenon[]" value="Sakit Tenggorokan" class="filled-in"
                        @if(old('phenomenon') && in_array('Sakit Tenggorokan', old('phenomenon'))) checked @endif />
                    <span>Sakit Tenggorokan</span>
                </label>
            </p>
            <div class="input-field col s12 m12">
                <input name="detail" id="detail" step="any" type="text" value="{{ old('detail') }}">
                <label for="detail">Keterangan</label>
            </div>
            <button class="btn waves-effect waves-light" style="width: 100%; margin-top: 5px;" type="submit"
                name="action">Tambah
                <i class="material-icons right">add</i>
            </button>
        </div>
    </form>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
$('input.village').autocomplete({
    data: {
"Balai Agas": null,
"Batu Ampar": null,
"Batu Buil": null,
"Batu Nanta": null,
"Belonsat": null,
"Guhung": null,
"Labang": null,
"Laman Bukit": null,
"Langan": null,
"Nanga Entebah": null,
"Nanga Menunuk": null,
"Nanga Pau": null,
"Nusa Kenyikap": null,
"Pemuar": null,
"Sepan Tonak": null,
"Tekaban": null,
"Upit": null,
"Beloyang": null,
"Junjung Permai": null,
"Kayu Bunga": null,
"Nanga Keberak": null,
"Nanga Raya": null,
"Nanga Tikan": null,
"Piawas": null,
"Tiong Keranjik": null,
"Bemban Permai": null,
"Domet Permai": null,
"Jabai": null,
"Kahiya": null,
"Kerangan Kora": null,
"Lengkong Nyadom": null,
"Nanga Ella Hilir": null,
"Nanga Kalan": null,
"Nanga Kempangai": null,
"Nanga Nuak": null,
"Nanga Nyuruh": null,
"Natai Compa": null,
"Nyanggau": null,
"Pelempai Jaya": null,
"Penyuguk": null,
"Perembang Nyuruh": null,
"Popai": null,
"Sungai Labuk": null,
"Sungai Mentoba": null,
"Batas Nangka": null,
"Batu Badak": null,
"Batu Onap": null,
"Belaban Ella": null,
"Laman Mumbung": null,
"Landau Leban": null,
"Lihai": null,
"Mawang Mentatai": null,
"Melona": null,
"Menukung Kota": null,
"Nanga Ella Hulu": null,
"Nanga Keruab": null,
"Nanga Siyai": null,
"Nusa Poring": null,
"Oyah": null,
"Pelaik Keruab": null,
"Sungai Sampak": null,
"Sungai Sampuk": null,
"Tanjung Beringin": null,
"Baru": null,
"Kelakik": null,
"Kenual": null,
"Labai Mandiri": null,
"Nanga Kayan": null,
"Nanga Kebebu": null,
"Nusa Pandau": null,
"Paal": null,
"Poring": null,
"Semadin Lengkong": null,
"Sido Mulyo": null,
"Tanjung Lay": null,
"Tanjung Niaga": null,
"Tanjung Sari": null,
"Tanjung Tengang": null,
"Tebing Karangan": null,
"Tembawang Panjang": null,
"Bayur Raya": null,
"Bina Jaya": null,
"Landau Garong": null,
"Landau Tubun": null,
"Mandau Baru": null,
"Manggala": null,
"Nanga Kelawai": null,
"Nanga Pintas": null,
"Nyanggai": null,
"Pelinggang": null,
"Senempak": null,
"Sungai Bakah": null,
"Engkurai": null,
"Kayan Semapau": null,
"Kompas Raya": null,
"Manding": null,
"Melamut Bersatu": null,
"Melawi Kiri Hilir": null,
"Merah Arai": null,
"Merpak": null,
"Nanga Belimbing": null,
"Nanga Man": null,
"Natai Panjang": null,
"Senibung": null,
"Suka Damai": null,
"Sungai Pinang": null,
"Sungai Raya": null,
"Tanjung Arak": null,
"Tanjung Paoh": null,
"Tekelak": null,
"Tengkajau": null,
"Berobai Permai": null,
"Bora": null,
"Kerangan Purun": null,
"Landau Sadak": null,
"Lingkar Indah": null,
"Madya Raya": null,
"Mekar Pelita": null,
"Meta Bersatu": null,
"Nanga Kasai": null,
"Nanga Kompi": null,
"Nanga Mancur": null,
"Nanga Pak": null,
"Nanga Raku": null,
"Nanga Sayan": null,
"Pekawai": null,
"Sayan Jaya": null,
"Siling Permai": null,
"Tumbak Raya": null,
"Gelata": null,
"Keluing Taja": null,
"Landau Kabu": null,
"Melana": null,
"Muara Tanjung": null,
"Nanga Betangai": null,
"Nanga Libas": null,
"Nanga Ora": null,
"Nanga Potai": null,
"Nanga Sokan": null,
"Nanga Tangkit": null,
"Penyengkuang": null,
"Sepakat": null,
"Sijau": null,
"Tanjung Mahung": null,
"Tanjung Sokan": null,
"Telaga Raya": null,
"Teluk Pongkal": null,
"Bata Luar": null,
"Batu Begigi": null,
"Bina Jaya": null,
"Bina Karya": null,
"Keranjik": null,
"Loka Jaya": null,
"Madong Raya": null,
"Maris Permai": null,
"Pelita Kenaya": null,
"Suka Maju": null,
"Tanjung Beringin Raya": null,
"Tanjung Gunung": null,
"Bukit Raya": null,
"Durian Jaya": null,
"Ganjang": null,
"Harapan Jaya": null,
"Keluas Hulu": null,
"Laja": null,
"Lintah Taum": null,
"Pelita Jaya": null,
"Togan Baru": null,
"Ulak Muid": null,
    },
});

$('input.district').autocomplete({
    data: {
        "Sokan": null,
        "Tanah Pinoh Barat": null,
        "Tanah Pinoh": null,
        "Sayan": null,
        "Belimbing Hulu": null,
        "Belimbing": null,
        "Pinoh Selatan": null,
        "Nanga Pinoh": null,
        "Pinoh Utara": null,
        "Ella Hilir": null,
        "Menukung": null
    },

});
});
</script>
@if ($errors->any())
<div id="modal" class="modal">
    <div class="modal-content">
        <h4 class="red-text">Ada Kesalahan !</h4>
        <p>Cek beberapa kesalahan berikut : </p>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Oke</a>
    </div>
</div>
<script>
    var Modalelem = document.querySelector('.modal');
    var instance = M.Modal.init(Modalelem);
    instance.open();
</script>
@elseif (session('success'))
<div id="modal" class="modal">
    <div class="modal-content">
        <h4 class="green-text">Berhasil</h4>
        <p>Berhasil memasukan data orang.</p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Oke</a>
    </div>
</div>
<script>
    var Modalelem = document.querySelector('.modal');
    var instance = M.Modal.init(Modalelem);
    instance.open();
</script>
@endif
@endsection
