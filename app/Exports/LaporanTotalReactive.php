<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class LaporanTotalReactive implements FromCollection
{
    public function view(): View
    {
        return view('exports.laporanTotalReactive', [
            'people' => Person::all()
        ]);
    }
}
