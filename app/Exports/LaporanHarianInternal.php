<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;
use App\Person;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LaporanHarianInternal implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.laporanInternal', [
            'people' => Person::whereDate('created_at', Carbon::today())->get()
        ]);
    }
}
