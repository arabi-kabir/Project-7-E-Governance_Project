<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\district;
use App\upazilla;
use Illuminate\Support\Facades\DB;
use App\User_divisional_officer;
use App\User_district_officer;


class DistrictOfficerController extends Controller
{
    // show admin index
    public function index()
    {
        return view('home.districtOfficer.index');
    }





}
