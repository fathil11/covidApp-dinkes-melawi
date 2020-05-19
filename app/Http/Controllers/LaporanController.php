<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\LaporanHarianInternal;
use App\Exports\LaporanTotalInternal;
use App\Exports\LaporanHarianProvinsiODP;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function downloadHarianInternal()
    {
        return Excel::download(new LaporanHarianInternal, 'laporan-harian-internal.xlsx');
    }

    public function downloadTotalInternal()
    {
        return Excel::download(new LaporanTotalInternal, 'laporan-total-internal.xlsx');
    }

    public function downloadHarianProvinsiODP()
    {
        return Excel::download(new LaporanHarianProvinsiODP, 'laporan-harian-provinsi-odp.xlsx');
    }

    public function downloadHarianProvinsiPDP()
    {
        return Excel::download(new LaporanHarianProvinsiPDP, 'laporan-harian-provinsi-pdp.xlsx');
    }
}
