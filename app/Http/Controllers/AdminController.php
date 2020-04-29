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
            'gender' => 'required|alpha|max:2',
            'address' => 'nullable|min:5|max:255',
            'district' => 'required|min:4|max:20',
            'status' => 'required|numeric|max:11',
        ]);

        if (in_array($data['district'], $this->districts)) {
            $request->district = array_search($data['district'], $this->districts, true)+1;

            $person = new Person();
            $person->name = $request->name;
            $person->age = $request->age;
            $person->gender = $request->gender;
            $person->address = $request->address;
            $person->district = $request->district;
            $person->status = $request->status;

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
            'gender' => 'required|alpha|max:2',
            'address' => 'nullable|min:5|max:255',
            'district' => 'required|min:4|max:20',
            'status' => 'required|numeric|max:11',
        ]);

        if (in_array($data['district'], $this->districts)) {
            $request->district = array_search($data['district'], $this->districts, true)+1;

            $person = Person::findOrFail($id);
            $person->name = $request->name;
            $person->age = $request->age;
            $person->gender = $request->gender;
            $person->address = $request->address;
            $person->district = $request->district;
            $person->status = $request->status;
            $person->save();
            $this->updateLog($person);
            return redirect()->back()->with('success', 'Berhasil mengubah data');
        } else {
            return redirect()->back()->withErrors(['Format kecamatan tidak sesuai.'])->withInput(request()->except('district'));
        }
    }

    public function showAllPerson()
    {
        $people = Person::all();
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

        $log = new Log();
        $log->person_id = $person->id;
        $log->status = '9';
        $log->save();

        return redirect()->back()->with('success', 'Berhasil mengganti status ke reaktif');
    }

    public function nonReactivePerson($id)
    {
        $person = Person::findOrFail($id);

        $log = new Log();
        $log->person_id = $person->id;
        $log->status = '10';
        $log->save();

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
