<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function downloadHarian($pass)
    {
        return Excel::download(new App\Exports\LaporanHarianInternal, 'laporan.xlsx');
    }
}