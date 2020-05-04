<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\LaporanInternal;

class LaporanController extends Controller
{
    public function downloadHarian($pass)
    {
        return Excel::download(new LaporanHarianInternal, 'laporan.xlsx');
    }
}
