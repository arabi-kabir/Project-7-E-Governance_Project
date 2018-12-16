<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarketRequest;
use Session;
use App\Item;
use App\User_aratdar;
use Illuminate\Support\Facades\DB;
use App\AratdarProvide;

date_default_timezone_set('Asia/Dhaka');

class AratdarController extends Controller
{
    // show admin index
    public function index()
    {
        // return view('home.aratdar.index');
        return redirect()->route('aratdar_allocation');
    }

    // show item request page
    public function aratdar_allocation()
    {
      // dd(session('user')->id);
        $allocation = AratdarProvide::where('aratdar_id', session('user')->id)->get();
        return view('home.aratdar.aratdar_allocation', ['markets' => $allocation]);
    }

    // show request history page
    public function my_profile_aradtdar()
    {
        // $info = MarketRequest::where('req_user_id', session('user')->id)->get();
        return view('home.aratdar.profile');
    }


}
