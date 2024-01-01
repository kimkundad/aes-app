<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\cusday;

class DashboardController extends Controller
{
    //

    public function index(){


        $all = cusday::count();
        $onground13 = cusday::where('day', 13)->where('type', 0)->count();
        $online13 = cusday::where('day', 13)->where('type', 1)->count();
        $onground14 = cusday::where('day', 14)->where('type', 0)->count();
        $online14 = cusday::where('day', 14)->where('type', 1)->count();
      
        $data['all'] = $all;
        $data['onground13'] = $onground13;
        $data['online13'] = $online13;
        $data['onground14'] = $onground14;
        $data['online14'] = $online14;
        return view('admin.dashboard.index', $data);
    }


}
