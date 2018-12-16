<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\district;
use Illuminate\Support\Facades\DB;
use App\User_divisional_officer;
use App\User_district_officer;
use App\upazilla;
use App\User_upazila_nirbahi_officer;
use App\Division_Provide;
use App\MarketItem;
use App\Item;
use App\UpazilaProvide;

class DivisionalOfficerController extends Controller
{
    // show admin index
    public function index()
    {
        // return view('home.divisionalOfficer.index');
        return redirect()->route('division_allocation');
    }

    // show add district officer
    public function show_add_district_officer()
    {
        $districts = district::where('division', session('user')->Division)->get();
        return view('home.divisionalOfficer.add_district_officer', ['districts' => $districts]);
    }

    // insert district officer
    public function insert_district_officer(Request $req)
    {
        $this->validate($req,[
            'username' => 'unique:user_district_officers,username',
            'district' => 'unique:user_district_officers,District',
        ]);

        $officer = new User_district_officer();
        $officer->type = 'district_officer';
        $officer->Division = session('user')->Division;
        $officer->District = $req->district;
        $officer->fullname = $req->fullname;
        $officer->username = $req->username;
        $officer->password = $req->password;
        $officer->email = $req->email;
        $officer->phone = $req->phone;
        $officer->save();

        Session::flash('success', 'Officer Information added');
        return redirect()->back();
    }

    // show district ofiicer List
    public function show_district_officers()
    {
        $officers = User_district_officer::where('Division', session('user')->Division)->get();
        return view('home.divisionalOfficer.district_officer_list', ['dis_officers' => $officers]);
    }


    // show upazila list page
    public function upazila_list()
    {
        $uapzilas = upazilla::where('division', session('user')->Division)->get();
        $districts = district::where('division', session('user')->Division)->get();
        return view('home.divisionalOfficer.upazila_list', ['upazilas' => $uapzilas, 'districts' => $districts]);
    }

    // insert upazila
    public function insert_upazila(Request $req)
    {
        $this->validate($req,[
            'name' => 'unique:upazillas,name',
        ]);

        $upazila = new upazilla();
        $upazila->name = $req->name;
        $upazila->division = session('user')->Division;
        $upazila->district = $req->district;
        $upazila->save();

        Session::flash('success', 'Upazila added');
        return redirect()->back();
    }


    // show add upazila officer
    public function show_add_upazila_officer()
    {
        $upazilas = upazilla::where('division', session('user')->Division)->get();
        return view('home.divisionalOfficer.add_upazila_officer', ['upazilas' => $upazilas]);
    }

    // insert upazila officer
    public function insert_upazila_officer(Request $req)
    {
        $this->validate($req,[
            'upazila' => 'unique:user_upazila_nirbahi_officers,upazila',
            'username' => 'unique:user_upazila_nirbahi_officers,username',
        ]);

        $officer = new User_upazila_nirbahi_officer();
        $officer->type = 'upazila_officer';
        $officer->Division = session('user')->Division;
        $officer->District = $req->district;
        $officer->upazila = $req->upazila;
        $officer->fullname = $req->fullname;
        $officer->username = $req->username;
        $officer->password = $req->password;
        $officer->email = $req->email;
        $officer->phone = $req->phone;
        $officer->save();

        Session::flash('success', 'Officer Information added');
        return redirect()->back();
    }

    // show district ofiicer List
    public function show_upazila_officers()
    {
        $officers = User_upazila_nirbahi_officer::where('Division', session('user')->Division)->get();
        return view('home.divisionalOfficer.upazila_officer_list', ['upa_officers' => $officers]);
    }

    // division allocation
    public function division_allocation()
    {
        $allocation = Division_Provide::where('division', session('user')->Division)->get();
        return view('home.divisionalOfficer.divisionAllocation', ['markets' => $allocation]);
    }

    // market forecast flter
    public function division_allocation_filter(Request $req)
    {
        $market_forecast = Division_Provide::where('year',$req->year)
                                      ->where('week',$req->week)
                                      ->where('division', session('user')->Division)->get();
        return view('home.divisionalOfficer.divisionAllocation', ['markets' => $market_forecast]);
    }









    // allocate market
    public function upazila_allocation()
    {
        $items = Item::all();
        $upazils = upazilla::where('division', session('user')->Division)->get();
        return view('home.divisionalOfficer.allocate_market_to_upazila', ['items' => $items, 'upazilas' => $upazils]);
    }

    // insert allocate market
    public function insert_upazila_allocation(Request $req)
    {
        $info = new UpazilaProvide();
        $info->division = session('user')->Division;
        $info->upazila = $req->upazila;
        $info->item = $req->item;
        $info->amount = $req->amount;
        $info->unallocated = $req->amount;
        $info->year = $req->year;
        $info->week = $req->week;
        $info->save();

        Division_Provide::where('year', $req->year)
                  ->where('week', $req->week)
                  ->where('item', $req->item)
                  ->where('division', session('user')->Division)
                  ->decrement('unallocated', $req->amount);

        Session::flash('success', 'Allocated');
        return redirect()->back();
    }

    // upazila market allocation history
    public function upazila_allocationHistory()
    {
        $historys = UpazilaProvide::where('division', session('user')->Division)->get();
        return view('home.divisionalOfficer.upazila_allocation_history', ['historys' => $historys]);
    }


}
