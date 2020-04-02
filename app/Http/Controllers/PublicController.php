<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Log;
use Carbon\Carbon;

class PublicController extends Controller
{
    public function index()
    {
        $stat['positive'] = Person::where('status', '5')->get()->count();
        $stat['recovered'] = Person::where('status', '7')->get()->count();
        $stat['died+'] = Person::where('status', '6')->get()->count();
        $stat['proccess'] = Person::where('status', '0')->get()->count();
        $stat['done'] = Person::where('status', '1')->get()->count();
        $stat['odp'] = $stat['proccess'] + $stat['done'];
        $stat['treated'] = Person::where('status', '2')->get()->count();
        $stat['died?'] = Person::where('status', '4')->get()->count();
        $stat['negative'] = Person::where('status', '3')->get()->count();
        $stat['pdp'] = $stat['treated'] + $stat['negative'] + $stat['died?'] + $stat['positive'];
        $stat['updated'] = Log::latest()->first()->created_at->toDateTimeString();
        $stat['updated'] = Carbon::create($stat['updated'])->locale('id')->diffForHumans();
        return view('public.home', compact('stat'));
    }
}
