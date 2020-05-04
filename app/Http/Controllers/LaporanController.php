<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function downloadHarian($pass)
    {
        return Excel::download(new App\Exports\LaporanHarianInternal, 'laporan.xlsx');
    }
}
