<?php

namespace App\Http\Controllers;

use Fathilarham\SpreadsheetCollection\SpreadsheetCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        $data = SpreadsheetCollection::get('https://docs.google.com/spreadsheets/d/1Khm5oGnCAw3Hw3SqitpF87AtnJ4FAYOo40Qz3Dgt9S4/edit?usp=sharing', 1);

        print(json_encode($data));

    }


}
