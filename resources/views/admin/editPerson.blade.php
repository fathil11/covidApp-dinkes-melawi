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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">No Hp</label>
                                        <input name="phone" value="{{ $person->phone }}" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Datang Dari</label>
                                        <input name="track" value="{{ $person->track }}" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Kendaraan</label>
                                        <input name="vehicle" value="{{ $person->vehicle }}" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Kecamatan</label>
                                        <input name="district" value="{{ $person->district }}" id="district" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Desa</label>
                                        <input name="village" value="{{ $person->village }}" type="text" id="village"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Dusun</label>
                                        <input name="sub_village" value="{{ $person->sub_village }}" type="text"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Gejala</label>
                                        <input name="phenomenon" value="{{ $person->phenomenon }}" type="text"
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
                                                        <h3>Jenis</h3>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row justify-content-center mb-2">
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="transmission"
                                                                        {{ $person->transmission == "1" ? 'checked' : '' }}
                                                                        id="inlineRadio1" value="1">
                                                                    Transmisi
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="transmission"
                                                                        {{ $person->transmission == "0" ? 'checked' : '' }}
                                                                        id="inlineRadio1" value="0">
                                                                    Non Transmisi
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="transmission"
                                                                        {{ $person->transmission == "2" ? 'checked' : '' }}
                                                                        id="inlineRadio1" value="2">
                                                                    Pelaku Perjalanan
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
                                                                        {{ $person->status == "Pendatang" ? 'checked' : '' }}
                                                                        id="inlineRadio2" value="12">
                                                                    Pendatang
                                                                    <span class="circle">
                                                                        <span class="check"></span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-radio form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status"
                                                                        {{ $person->status == "OTG" ? 'checked' : '' }}
                                                                        id="inlineRadio1" value="11">
                                                                    OTG
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
                                                                    Terkonfirmasi
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
                                                                    Meninggal Terkonfirmasi
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
@section('js')
<script>
    function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
let districts = ['Sokan', 'Tanah Pinoh Barat', 'Tanah Pinoh', 'Sayan', 'Belimbing Hulu', 'Belimbing', 'Pinoh Selatan', 'Nanga Pinoh', 'Pinoh Utara', 'Ella Hilir', 'Menukung'];
let villages = ['Balai Agas','Batu Ampar','Batu Buil','Batu Nanta','Belonsat','Guhung','Labang','Laman Bukit','Langan','Nanga Entebah','Nanga Menunuk','Nanga Pau','Nusa Kenyikap','Pemuar','Sepan Tonak','Tekaban','Upit','Beloyang','Junjung Permai','Kayu Bunga','Nanga Keberak','Nanga Raya','Nanga Tikan','Piawas','Tiong Keranjik','Bemban Permai','Domet Permai','Jabai','Kahiya','Kerangan Kora','Lengkong Nyadom','Nanga Ella Hilir','Nanga Kalan','Nanga Kempangai','Nanga Nuak','Nanga Nyuruh','Natai Compa','Nyanggau','Pelempai Jaya','Penyuguk','Perembang Nyuruh','Popai','Sungai Labuk','Sungai Mentoba','Batas Nangka','Batu Badak','Batu Onap','Belaban Ella','Laman Mumbung','Landau Leban','Lihai','Mawang Mentatai','Melona','Menukung Kota','Nanga Ella Hulu','Nanga Keruab','Nanga Siyai','Nusa Poring','Oyah','Pelaik Keruab','Sungai Sampak','Sungai Sampuk','Tanjung Beringin','B A R U','Kelakik','Kenual','Labai Mandiri','Nanga Kayan','Nanga Kebebu','Nusa Pandau','Paal','Poring','Semadin Lengkong','Sido Mulyo','Tanjung Lay','Tanjung Niaga','Tanjung Sari','Tanjung Tengang','Tebing Karangan','Tembawang Panjang','Bayur Raya','Bina Jaya','Landau Garong','Landau Tubun','Mandau Baru','Manggala','Nanga Kelawai','Nanga Pintas','Nyanggai','Pelinggang','Senempak','Sungai Bakah','Engkurai','Kayan Semapau','Kompas Raya','Manding','Melamut Bersatu','Melawi Kiri Hilir','Merah Arai','Merpak','Nanga Belimbing','Nanga Man','Natai Panjang','Senibung','Suka Damai','Sungai Pinang','Sungai Raya','Tanjung Arak','Tanjung Paoh','Tekelak','Tengkajau','Berobai Permai','Bora','Kerangan Purun','Landau Sadak','Lingkar Indah','Madya Raya','Mekar Pelita','Meta Bersatu','Nanga Kasai','Nanga Kompi','Nanga Mancur','Nanga Pak','Nanga Raku','Nanga Sayan','Pekawai','Sayan Jaya','Siling Permai','Tumbak Raya','Gelata','Keluing Taja','Landau Kabu','Melana','Muara Tanjung','Nanga Betangai','Nanga Libas','Nanga Ora','Nanga Potai','Nanga Sokan','Nanga Tangkit','Penyengkuang','Sepakat','Sijau','Tanjung Mahung','Tanjung Sokan','Telaga Raya','Teluk Pongkal','Bata Luar','Batu Begigi','Bina Jaya','Bina Karya','Keranjik','Loka Jaya','Madong Raya','Maris Permai','Pelita Kenaya','Suka Maju','Tanjung Beringin Raya','Tanjung Gunung','Bukit Raya','Durian Jaya','Ganjang','Harapan Jaya','Keluas Hulu','Laja','Lintah Taum','Pelita Jaya','Togan Baru','Ulak Muid'];
autocomplete(document.getElementById("district"), districts);
autocomplete(document.getElementById("village"), villages);

</script>
@endsection
