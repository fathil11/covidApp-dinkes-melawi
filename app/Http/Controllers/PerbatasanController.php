<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Log;

class PerbatasanController extends Controller
{
    public $districts = ['Sokan', 'Tanah Pinoh Barat', 'Tanah Pinoh', 'Sayan', 'Belimbing Hulu', 'Belimbing', 'Pinoh Selatan', 'Nanga Pinoh', 'Pinoh Utara', 'Ella Hilir', 'Menukung'];

    public function index(){
        return view('perbatasan.index');
    }

    public function showPelakuPerjalanan(){
        $people = Person::where('transmission', '2')->get();
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
            if(isset($request->phenomenon)){
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
        if($person->delete()){
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
}
