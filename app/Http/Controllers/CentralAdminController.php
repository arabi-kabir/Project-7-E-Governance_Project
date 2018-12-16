<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\district;
use Illuminate\Support\Facades\DB;
use App\User_divisional_officer;
use App\User_district_officer;
use App\MarketItem;
use App\Item;
use App\Division_Provide;

class CentralAdminController extends Controller
{
    // show admin index
    public function index()
    {
        // return view('home.centralAdmin.index');
        return redirect()->route('market_forecast');
    }

    // show add district page
    public function add_district()
    {
        return view('home.centralAdmin.add_district');
    }

    // add market item
    public function add_market_item()
    {
        $items = Item::all();
        return view('home.centralAdmin.add_market_item', ['items' => $items]);
    }

    // insert district
    public function insert_district(Request $req)
    {
        $this->validate($req,[
            'name' => 'unique:districts,name'
        ]);

        $district = new district();
        $district->name = $req->name;
        $district->division = $req->division;
        $district->save();

        Session::flash('success', 'District added');
        return redirect()->back();
    }

    // show district list page
    public function show_district()
    {
        $districts = district::all();
        return view('home.centralAdmin.district_list', ['districts' => $districts]);
    }

    // show division list page
    public function show_division()
    {
        $divisions = DB::table('division_list')->get();
        // dd($divisions);
        return view('home.centralAdmin.division_list', ['divisions' => $divisions]);
    }

    // show add divisional ofiicer page
    public function show_add_divisional_officer()
    {
        return view('home.centralAdmin.add_divisional_officer');
    }

    // show divisional ofiicer List
    public function show_divisional_officers()
    {
        $officers = User_divisional_officer::all();
        return view('home.centralAdmin.divisional_officer_list', ['div_officers' => $officers]);
    }

    // market forecast
    public function market_forecast()
    {
        $market_forecast = MarketItem::all();
        return view('home.centralAdmin.market_forecast', ['markets' => $market_forecast]);
    }

    // market forecast flter
    public function market_forecast_filter(Request $req)
    {
        $market_forecast = MarketItem::where('year',$req->year)
                                      ->where('week',$req->week)->get();
        return view('home.centralAdmin.market_forecast', ['markets' => $market_forecast]);
    }

    // insert divisional officer
    public function insert_divisional_officer(Request $req)
    {
        $this->validate($req,[
            'division' => 'unique:user_divisional_officers,Division',
            'username' => 'unique:user_divisional_officers,username',
        ]);

        $officer = new User_divisional_officer();
        $officer->type = 'divisional_officer';
        $officer->Division = $req->division;
        $officer->fullname = $req->fullname;
        $officer->username = $req->username;
        $officer->password = $req->password;
        $officer->email = $req->email;
        $officer->phone = $req->phone;
        $officer->save();

        Session::flash('success', 'Officer Information added');
        return redirect()->back();
    }

    // insert market item
    public function insert_market_item(Request $req)
    {
        $this->validate($req,[

        ]);

        $item = new MarketItem();
        $item->year = $req->year;
        $item->week = $req->week;
        $item->item = $req->item;
        $item->amount = $req->amount;
        $item->unallocated = $req->amount;
        $item->status = "0";
        $item->save();

        Session::flash('success', 'Item added');
        return redirect()->back();
    }

    // show add item
    public function add_item()
    {
        return view('home.centralAdmin.add_item');
    }

    // insert item
    public function insert_item(Request $req)
    {
        $item = new Item();
        $item->item_name = $req->item_name;
        $item->save();

        Session::flash('success', 'Item added');
        return redirect()->back();
    }

    // allocate market
    public function market_allocate()
    {
        $items = Item::all();
        return view('home.centralAdmin.allocate_market', ['items' => $items]);
    }

    // insert allocate market
    public function insert_market_allocate(Request $req)
    {
        $info = new Division_Provide();
        $info->division = $req->division;
        $info->item = $req->item;
        $info->amount = $req->amount;
        $info->unallocated = $req->amount;
        $info->year = $req->year;
        $info->week = $req->week;
        $info->save();

        MarketItem::where('year', $req->year)
                  ->where('week', $req->week)
                  ->where('item', $req->item)
                  ->decrement('unallocated', $req->amount);

        Session::flash('success', 'Allocated');
        return redirect()->back();
    }

    // market allocation
    public function allocationHistory()
    {
        $historys = Division_Provide::all();
        return view('home.centralAdmin.allocation_history', ['historys' => $historys]);
    }

    // market allocation flter
    public function allocationHistory_filter(Request $req)
    {
        $historys = Division_Provide::where('year',$req->year)
                                      ->where('week',$req->week)->get();
        return view('home.centralAdmin.allocation_history', ['historys' => $historys]);
    }


}
