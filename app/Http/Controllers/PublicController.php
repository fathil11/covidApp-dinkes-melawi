<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Statistic;
use App\Person;
use App\Post;
use App\Log;
use Carbon\Carbon;

class PublicController extends Controller
{
    public function index()
    {
        $this->pushStat();

        $stat['positive'] = Person::where('status', '5')->get()->count();
        $stat['recovered'] = Person::where('status', '7')->get()->count();
        $stat['died+'] = Person::where('status', '6')->get()->count();
        $stat['proccess'] = Person::where('status', '0')->get()->count();
        $stat['done'] = Person::where('status', '1')->get()->count();
        $stat['odp'] = $stat['proccess'] + $stat['done'];
        $stat['otg'] = Log::where('status', '11')->get()->count();
        $stat['otgProc'] = Person::where('status', '11')->get()->count();
        $stat['otgDone'] = $stat['otg'] - $stat['otgProc'];
        $stat['treated'] = Person::where('status', '2')->get()->count();
        $stat['died?'] = Person::where('status', '4')->get()->count();
        $stat['negative'] = Person::where('status', '3')->get()->count();
        $stat['pdp'] = $stat['treated'] + $stat['negative'] + $stat['died?'] + $stat['positive'];
        if (Log::all()->count() != 0) {
            $stat['updated'] = Log::latest()->first()->created_at->toDateTimeString();
            $stat['updated'] = Carbon::create($stat['updated'])->locale('id')->diffForHumans();
        } else {
            $stat['updated'] = '-';
        }

        return view('public.home', compact('stat'));
    }

    public function showLogin()
    {
        return view('public.login');
    }

    public function showAllPost()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('public.allPost', compact('posts'));
    }

    public function openPost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('public.openPost', compact('post'));
    }

    public function showCotactUs()
    {
        return view('public.contactUs');
    }

    public function logout()
    {
        if (Auth::check()) {
            request()->session()->flush();
            return redirect('/');
        } else {
            return abort(404);
        }
    }

    public static function getDistrictStat($dis)
    {
        $stat['positive'] = Person::where([['district', $dis], ['status', '5']])->get()->count();
        $stat['recovered'] = Person::where([['district', $dis], ['status', '7']])->get()->count();
        $stat['died+'] = Person::where([['district', $dis], ['status', '6']])->get()->count();
        $stat['proccess'] = Person::where([['district', $dis], ['status', '0']])->get()->count();
        $stat['done'] = Person::where([['district', $dis], ['status', '1']])->get()->count();
        $stat['odp'] = $stat['proccess'] + $stat['done'];
        $stat['treated'] = Person::where([['district', $dis], ['status', '2']])->get()->count();
        $stat['died?'] = Person::where([['district', $dis], ['status', '4']])->get()->count();
        $stat['negative'] = Person::where([['district', $dis], ['status', '3']])->get()->count();
        $stat['pdp'] = $stat['treated'] + $stat['negative'] + $stat['died?'] + $stat['positive'];
        $stat['otgProc'] = Person::where([['status', '11'], ['district', $dis]])->get()->count();
        return $stat;
    }

    public function pushStat()
    {
        $client_ip = $this->getUserIpAddr();
        $check = Statistic::where('viewer_ip', $client_ip)->first();

        if ($check == null) {
            $stat = new Statistic();
            $stat->viewer_ip = $client_ip;
            $stat->save();
        }
    }

    public function getUserIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
