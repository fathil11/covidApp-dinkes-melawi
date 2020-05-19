<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;
use App\Person;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LaporanTotalInternal implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.laporanInternal', [
            'people' => Person::all()
        ]);
    }
}
