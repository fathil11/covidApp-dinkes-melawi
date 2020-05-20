<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;
use App\Person;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LaporanTotalKecamatan implements FromView, ShouldAutoSize
{
    private $district;

    public function __construct($district)
    {
        $this->district = $district;
    }

    public function view(): View
    {
        return view('exports.laporan-kecamatan', [
            'people' => Person::where('district', $this->district)->get()
        ]);
    }
}
