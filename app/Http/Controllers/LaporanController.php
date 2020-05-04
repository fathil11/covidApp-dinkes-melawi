<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\LaporanHarianInternal;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function downloadHarian()
    {
        return Excel::download(new LaporanHarianInternal, 'laporan.xlsx');
    }
}
