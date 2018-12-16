<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarketRequest;
use Session;
use App\User_aratdar;
use Illuminate\Support\Facades\DB;
use App\Item;
use App\UpazilaProvide;
use App\AratdarProvide;


class UpazilaOfficerController extends Controller
{
    // show Upazila index
    public function index()
    {
        // return view('home.upazilaNirbahiOfficer.index');
        return redirect()->route('upazilaAllocation');
    }

    // show Upazila index
    public function upazilaAllocation()
    {
      $allocation = UpazilaProvide::where('upazila', session('user')->upazila)->get();
      return view('home.upazilaNirbahiOfficer.Upazila_Allocation', ['markets' => $allocation]);
    }

    // show aratdar list
    public function aratdar_list()
    {
        $aratdars = User_aratdar::where('upazila', session('user')->upazila)->get();
        return view('home.upazilaNirbahiOfficer.aratdar_list',[
            'aratdars' => $aratdars,
        ]);
    }


    // show allocate_to_aratdar
    public function allocate_to_aratdar()
    {
        $items = Item::all();
        $aratdars = User_aratdar::where('upazila', session('user')->upazila)->get();

        return view('home.upazilaNirbahiOfficer.Allocate_to_Aratdar',[
            'items' => $items,
            'aratdars' => $aratdars,
        ]);
    }

    public function insert_aratdar_allocation(Request $req)
    {
        $info = new AratdarProvide();
        $info->aratdar_id = $req->aratdar_id;
        $info->division = session('user')->Division;
        $info->upazila = session('user')->upazila;
        $info->item = $req->item;
        $info->amount = $req->amount;
        $info->year = $req->year;
        $info->week = $req->week;
        $info->save();

        UpazilaProvide::where('year', $req->year)
                  ->where('week', $req->week)
                  ->where('item', $req->item)
                  ->where('upazila', session('user')->upazila)
                  ->decrement('unallocated', $req->amount);

        Session::flash('success', 'Allocated');
        return redirect()->back();
    }

    // upazila market allocation history
    public function aratdar_allocationHistory()
    {
        $historys = AratdarProvide::where('upazila', session('user')->upazila)->get();
        return view('home.upazilaNirbahiOfficer.aratdar_allocation_history', ['historys' => $historys]);
    }


}
