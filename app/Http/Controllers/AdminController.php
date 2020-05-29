<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Log;

class AdminController extends Controller
{
    public $districts = ['Sokan', 'Tanah Pinoh Barat', 'Tanah Pinoh', 'Sayan', 'Belimbing Hulu', 'Belimbing', 'Pinoh Selatan', 'Nanga Pinoh', 'Pinoh Utara', 'Ella Hilir', 'Menukung'];

    public function index()
    {
        $stat['positive'] = Person::where('status', '5')->get()->count();
        $stat['recovered'] = Person::where('status', '7')->get()->count();
        $stat['died'] = Person::where('status', '6')->get()->count();
        $stat['odp'] = Person::where('status', '0')->get()->count();
        $stat['pdp'] = Person::where('status', '2')->get()->count();

        return view('admin.dashboard', compact('stat'));
    }

    public function showCreatePerson()
    {
        return view('admin.addPerson');
    }

    public function storePerson(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:2|max:100',
            'age' => 'required|numeric|min:1|max:99',
            'phone' => 'min:5|max:15',
            'gender' => 'required|alpha|max:2',
            'track' => 'required|min:1|max:50',
            'vehicle' => 'required|min:1|max:50',
            'district' => 'required|min:4|max:20',
            'village' => 'required|min:2|max:50',
            'sub_village' => 'nullable|min:3|max:255',
            'transmission' => 'required|numeric|max:3',
            'phenomenon' => 'nullable',
        ]);


        if (in_array($data['district'], $this->districts)) {
            $request->district = array_search($data['district'], $this->districts, true)+1;

            $person = new Person();
            $person->name = $request->name;
            $person->age = $request->age;
            $person->phone = $request->phone;
            $person->gender = $request->gender;
            $person->track = $request->track;
            $person->vehicle = $request->vehicle;
            $person->district = $request->district;
            $person->village = $request->village;
            $person->sub_village = $request->sub_village;
            $person->transmission = $request->transmission;
            $person->status = $request->status;
            $person->phenomenon = $request->phenomenon;
            $person->save();
            $this->updateLog($person);

            return redirect()->back()->with('success', 'Berhasil menambahkan data');
        } else {
            return redirect()->back()->withErrors(['Format kecamatan tidak sesuai.'])->withInput(request()->except('district'));
        }
    }

    public function showEditPerson($id)
    {
        $person = Person::findOrFail($id);
        return view('admin.editPerson', compact('person'));
    }

    public function updatePerson(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|min:2|max:100',
            'age' => 'required|numeric|min:1|max:99',
            'phone' => 'min:5|max:15',
            'gender' => 'required|alpha|max:2',
            'track' => 'required|min:1|max:50',
            'vehicle' => 'required|min:1|max:50',
            'district' => 'required|min:4|max:20',
            'village' => 'required|min:2|max:50',
            'sub_village' => 'nullable|min:3|max:255',
            'transmission' => 'required|numeric|max:3',
            'phenomenon' => 'nullable',
            'status' => 'required',
        ]);

        if (in_array($data['district'], $this->districts)) {
            $request->district = array_search($data['district'], $this->districts, true)+1;

            $person = Person::findOrFail($id);
            $person->name = $request->name;
            $person->age = $request->age;
            $person->phone = $request->phone;
            $person->gender = $request->gender;
            $person->track = $request->track;
            $person->vehicle = $request->vehicle;
            $person->district = $request->district;
            $person->village = $request->village;
            $person->sub_village = $request->sub_village;
            $person->transmission = $request->transmission;
            $person->status = $request->status;
            $person->phenomenon = $request->phenomenon;
            if(isset($request->phenomenon)){
                $person->status = '0';
            }
            $person->save();
            $this->updateLog($person);

            return redirect()->back()->with('success', 'Berhasil mengubah data');
        } else {
            return redirect()->back()->withErrors(['Format kecamatan tidak sesuai.'])->withInput(request()->except('district'));
        }
    }

    public function showRapid()
    {
        $people = Person::all();
        return view('admin.rapid', compact('people'));
    }

    public function showAllPerson()
    {
        $people = Person::where('status', '!=', '12')->get();
        return view('admin.allPeople', compact('people'));
    }

    public function showPendatangPerson()
    {
        $people = Person::where('status', '12')->get();
        return view('admin.allPeople', compact('people'));
    }

    public function showOdpPeople()
    {
        $people = Person::where('status', '0')->get();
        return view('admin.odpPeople', compact('people'));
    }

    public function showOtgPeople()
    {
        $people = Person::where('status', '11')->get();
        return view('admin.otgPeople', compact('people'));
    }

    public function showPdpPeople()
    {
        $people = Person::whereIn('status', ['2', '5', '4'])->get();
        return view('admin.pdpPeople', compact('people'));
    }

    public function deletePerson($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }

    public function odpPerson($id)
    {
        $person = Person::findOrFail($id);
        $person->status = '0';
        $person->save();
        $this->updateLog($person);

        return redirect()->back()->with('success', 'Berhasil mengganti status ke ODP');
    }

    public function pdpPerson($id)
    {
        $person = Person::findOrFail($id);
        $person->status = '2';
        $person->save();
        $this->updateLog($person);

        return redirect()->back()->with('success', 'Berhasil mengganti status ke PDP');
    }

    public function clearPerson($id)
    {
        $person = Person::findOrFail($id);
        $person->status = '1';
        $person->save();
        $this->updateLog($person);

        return redirect()->back()->with('success', 'Berhasil mengganti status ke Aman');
    }

    public function reactivePerson($id)
    {
        $person = Person::findOrFail($id);

        $foundNonReactive = false;
        foreach ($person->logs as $log) {
            if($log->status == 10){
                $log->status = 9;
                $log->save();
                $foundNonReactive = true;
            }
        }

        if(!$foundNonReactive){
            $log = new Log();
            $log->person_id = $person->id;
            $log->status = '9';
            $log->save();
        }

        return redirect()->back()->with('success', 'Berhasil mengganti status ke reaktif');
    }

    public function nonReactivePerson($id)
    {

        $person = Person::findOrFail($id);
        $foundReactive = false;
        foreach ($person->logs as $log) {
            if($log->status == 9){
                $log->status = 10;
                $log->save();
                $foundReactive = true;
            }
        }

        if(!$foundReactive){
            $log = new Log();
            $log->person_id = $person->id;
            $log->status = '10';
            $log->save();
        }

        return redirect()->back()->with('success', 'Berhasil mengganti status ke non reaktif');
    }

    public function positivePerson($id)
    {
        $person = Person::findOrFail($id);
        if ($person->getActualAttribute('status') == 4) {
            $add = 'Meninggal Positif';
            $person->status = '6';
        } else {
            $add = 'Positif';
            $person->status = '5';
        }
        $person->save();
        $this->updateLog($person);

        return redirect()->back()->with('success', 'Berhasil mengganti status ke ' . $add);
    }

    public function negativePerson($id)
    {
        $person = Person::findOrFail($id);
        $person->status = '3';
        $person->save();
        $this->updateLog($person);

        return redirect()->back()->with('success', 'Berhasil mengganti status ke Negatif');
    }

    public function diedPerson($id)
    {
        $person = Person::findOrFail($id);
        if ($person->getActualAttribute('status') != 3 && $person->getActualAttribute('status') != 5) {
            $add = 'Belum Diketahui';
            $person->status = '4';
        } elseif ($person->getActualAttribute('status') == 3) {
            $add = 'Negatif';
            $person->status = '8';
        } elseif ($person->getActualAttribute('status') == 5) {
            $add = 'Positif';
            $person->status = '6';
        }

        if ($person->save()) {
            $this->updateLog($person);
        }

        return redirect()->back()->with('success', 'Berhasil mengganti status ke Meninggal ' . $add);
    }

    public function showMap()
    {
        return view('admin.map');
    }

    public function storeMap(request $request)
    {
        $request->validate([
            'map' => 'required|file|image|max:3000',
        ]);

        $map = $request->map->storeAs('public/map', 'maps.jpg');

        if($map){
            return redirect('/admin/peta')->with('success', 'Berhasil mengupdate peta');
        }else{
            return redirect('/admin/peta')->with('success', 'Gagal mengupdate peta');
        }
    }

    public function showLaporan()
    {
        return view('admin.report');
    }

    public function updateLog($person)
    {
        $log = new Log();
        $log->person_id = $person->id;
        $log->status = $person->getActualAttribute('status');
        $log->save();
    }

    public static function getDistrictStat($dis, $stat)
    {
        return Person::where([['district', $dis], ['status', $stat]])->get()->count();
    }
}
