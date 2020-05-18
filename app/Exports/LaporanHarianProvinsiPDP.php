<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;
use App\Person;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LaporanHarianProvinsiPDP implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.laporanHarianProvinsiPDP', [
            'people' => Person::where('status', '2')->whereDate('created_at', Carbon::today())->get()
        ]);
    }
}
