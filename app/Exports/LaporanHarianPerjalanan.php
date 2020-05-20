<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;
use App\Person;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LaporanHarianPerjalanan implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('exports.laporanPerjalanan', [
            'people' => Person::where('created_at', '>', Carbon::yesterday()->hour('7'))
            ->where('created_at', '<', Carbon::today()->hour('7'))
            ->get()
            // 'people' => Person::all()
        ]);
    }
}
