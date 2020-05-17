<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\LaporanHarianInternal;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function downloadHarian()
    {
        return Excel::download(new LaporanHarianInternal, 'laporan-harian-internal.xlsx');
    }

    public function downloadHarianProvinsiODP()
    {
        return Excel::download(new LaporanHarianProvinsiODP, 'laporan-harian-provinsi-odp.xlsx');
    }
}
