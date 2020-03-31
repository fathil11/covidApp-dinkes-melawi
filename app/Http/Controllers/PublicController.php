<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PublicController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return view('testing', compact('people'));
    }
}
