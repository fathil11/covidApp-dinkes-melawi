<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Log;
use Illuminate\Support\Facades\Auth;

class PerbatasanController extends Controller
{
    public $districts = ['Sokan', 'Tanah Pinoh Barat', 'Tanah Pinoh', 'Sayan', 'Belimbing Hulu', 'Belimbing', 'Pinoh Selatan', 'Nanga Pinoh', 'Pinoh Utara', 'Ella Hilir', 'Menukung'];

    public function index()
    {
        return view('perbatasan.index');
    }

    public function showAllOrang()
    {
        if (Auth::user()->id == 5) {
            $people = Person::where([['status', '!=', '12']])
                                    ->get();
        } else {
            $people = Person::where([['status', '!=', '12'],
                                    ['district', $this->getDistrict()]])
                                    ->get();
        }
        return view('perbatasan.lihatOrang', compact('people'));
    }

    public function showPendatangOrang()
    {
        if (Auth::user()->id == 5) {
            $people = Person::where([['status', '12']])
                                ->get();
        } else {
            $people = Person::where([['status', '12'],
                                ['district', $this->getDistrict()]])
                                ->get();
        }
        return view('perbatasan.lihatOrang', compact('people'));
    }

    public function showPelakuPerjalanan()
    {
        if (Auth::user()->id == 5) {
            $people = Person::where([['status', '!=', '12'],
                                ['transmission', '2']])
                                ->get();
        } else {
            $people = Person::where([['status', '!=', '12'],
                                ['district', $this->getDistrict()],
                                ['transmission', '2']])
                                ->get();
        }
        return view('perbatasan.kelolaOrang', compact('people'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:2|max:100',
            'age' => 'required|numeric|min:1|max:99',
            'phone' => 'nullable|min:5|max:15',
            'gender' => 'required|alpha|max:2',
            'track' => 'required|min:1|max:50',
            'vehicle' => 'required|min:1|max:50',
            'district' => 'required|min:4|max:20',
            'village' => 'required|min:2|max:50',
            'sub_village' => 'nullable|min:3|max:255',
            'transmission' => 'required|numeric|max:3',
            'temperature' => 'nullable|numeric|min:32|max:41',
            'phenomenon' => 'nullable',
            'detail' => 'nullable|min:1|max:512',
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
            $person->temperature = $request->temperature;
            $person->detail = $request->detail;
            $person->transmission = $request->transmission;
            $person->status = '12';
            if (isset($request->phenomenon)) {
                $phenomenons = implode(',', $request->phenomenon);
                $person->phenomenon = $phenomenons;
                $person->status = '0';
            }
            $person->save();
            $this->updateLog($person);

            return redirect()->back()->with('success', 'Berhasil menambahkan data');
        } else {
            return redirect()->back()->withErrors(['Format kecamatan tidak sesuai.'])->withInput(request()->except('district'));
        }
    }

    public function enterOrang($id)
    {
        $person = Person::findOrFail($id);

        $this->updateLog($person);
        return redirect()->back()->with('enter', 'Berhasil mencatat orang');
    }

    public function deleteOrang($id)
    {
        $person = Person::findOrFail($id);
        if ($person->delete()) {
            return redirect()->back()->with('msg', 'Berhasil menghapus data');
        }
    }

    public function updateLog($person)
    {
        $log = new Log();
        $log->person_id = $person->id;
        $log->status = $person->getActualAttribute('status');
        $log->save();
    }

    public function getDistrict()
    {
        switch (Auth::user()->id) {
            case '6':
                $district = '0';
                break;

            case '7':
                $district = '1';
                break;

            case '8':
                $district = '2';
                break;

            case '9':
                $district = '3';
                break;

            case '10':
                $district = '4';
                break;

            case '11':
                $district = '5';
                break;

            case '12':
                $district = '6';
                break;

            case '13':
                $district = '7';
                break;

            case '14':
                $district = '8';
                break;

            case '15':
                $district = '9';
                break;

            case '16':
                $district = '10';
                break;

            default:
                $district = '1';
                break;
        }

        return $district;
    }
}
