<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Statistic;
use App\Person;
use App\Post;
use App\Log;
use App\Manual;
use Carbon\Carbon;
use Fathilarham\SpreadsheetCollection\SpreadsheetCollection;

class PublicController extends Controller
{
    public function index()
    {
        $data = SpreadsheetCollection::get('https://docs.google.com/spreadsheets/d/1CPNkgbLJaE5m3Rbe8dCg4twdUohF2wIX2WW_mvjXhRQ/edit#gid=0')->getContent(1);
        $last_updated = SpreadsheetCollection::get('https://docs.google.com/spreadsheets/d/1CPNkgbLJaE5m3Rbe8dCg4twdUohF2wIX2WW_mvjXhRQ/edit#gid=0')->getContent(2);
        $last_updated = $last_updated->first()['val'];
        $last_updated = Carbon::make($last_updated)->setTimezone('Asia/Jakarta')->locale('id')->diffForHumans();

        return view('public.home', compact(['data', 'last_updated']));
    }

    // public function index()
    // {
    //     $this->pushStat();

    //     // ODP Section
    //     $stat['proccess'] = Person::where('status', '0')->get()->count();
    //     $stat['done'] = Person::where('status', '1')->get()->count();
    //     $stat['odp'] = $stat['proccess'] + $stat['done'];

    //     $manual = Manual::findOrFail(1);

    //     // OTG Section
    //     $stat['otg_pre'] = $manual->otg_pre;
    //     $stat['otg_waiting'] = $manual->otg_waiting;
    //     $stat['otg_negative'] = $manual->otg_negative;
    //     $stat['otg_positive'] = $manual->otg_positive;
    //     $stat['otg_total'] = $stat['otg_pre'] + $stat['otg_waiting'] +$stat['otg_negative']
    //         + $stat['otg_positive'];

    //     // Reactive Section
    //     $stat['reactive_pre'] = $manual->reactive_pre;
    //     $stat['reactive_waiting'] = $manual->reactive_waiting;
    //     $stat['reactive_negative'] = $manual->reactive_negative;
    //     $stat['reactive_positive'] = $manual->reactive_positive;
    //     $stat['reactive_total'] = $stat['reactive_pre'] + $stat['reactive_waiting'] +$stat['reactive_negative']
    //         + $stat['reactive_positive'];

    //     // PDP Section
    //     $stat['pdp_process'] = $manual->pdp_process;
    //     $stat['pdp_negative'] = $manual->pdp_negative;
    //     $stat['pdp_positive'] = $manual->pdp_positive;
    //     $stat['pdp_died_unknown'] = $manual->pdp_died_unknown;
    //     $stat['pdp_total'] = $stat['pdp_process'] + $stat['pdp_died_unknown'] +$stat['pdp_negative'] + $stat['pdp_positive'];

    //     // Other Section
    //     $stat['healed'] = $manual->healed;
    //     $stat['died_positive'] = $manual->died_positive;
    //     $stat['positive_total'] = $stat['otg_positive'] + $stat['reactive_positive'] +  $stat['pdp_positive'] + $stat['died_positive'];

    //     $stat['updated'] = Carbon::make($manual->updated_at)->locale('id')->diffForHumans();

    //     return view('public.home', compact('stat'));
    // }

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
