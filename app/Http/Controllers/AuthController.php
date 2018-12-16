<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User_aratdar;
use App\User_central_admin;
use App\User_district_officer;
use App\User_divisional_officer;
use App\User_upazila_nirbahi_officer;
use App\district;
use App\upazilla;
use Session;

class AuthController extends Controller
{
    // show login page
    public function show_login()
    {
        return view('auth.login');
    }

    // show registration page
    public function show_registration_1()
    {
        return view('auth.registration.step_1');
    }
    public function step_1(Request $req)
    {
        Session::put('reg_division', $req->division);
        return redirect()->route('show_registration_2');
    }
    public function show_registration_2()
    {
        $districts = district::where('division', Session::get('reg_division') )->get();
        return view('auth.registration.step_2', ['districts' => $districts]);
    }
    public function step_2(Request $req)
    {
        Session::put('reg_district', $req->district);
        return redirect()->route('show_registration_3');
    }
    public function show_registration_3()
    {
        $upazilas = upazilla::where('district', Session::get('reg_district') )->get();
        return view('auth.registration.step_3', ['upazilas' => $upazilas]);
    }
    public function step_3(Request $req)
    {
        Session::put('reg_upazila', $req->upazila);
        return redirect()->route('show_registration_4');
    }
    public function show_registration_4()
    {
        return view('auth.registration.step_4');
    }
    public function step_4(Request $req)
    {
        $this->validate($req,[
            'username' => 'unique:user_aratdars,username'
        ]);

        $user = new User_aratdar();
        $user->type = 'Aratdar';
        $user->status = 'Active';
        $user->Division = Session::get('reg_division');
        $user->District = Session::get('reg_district');
        $user->upazila = Session::get('reg_upazila');
        $user->address = $req->address;
        $user->fullname = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->save();

        // delete session
        session()->forget('reg_division');
        session()->forget('reg_district');
        session()->forget('reg_upazila');

        Session::flash('success', 'Registration successfully Completed');
        return redirect()->route('show_login');
    }




    // verify user
    public function verifyUser(Request $req)
    {
        if($req->type == 0)
        {
            // Super admin
            $user = User_central_admin::where([
                'username' => $req->username,
                'password' => $req->password
            ])->first();

            if($user)
            {
                $req->session()->put('user', $user);
                Session::flash('success', 'login successfully');
                return redirect()->route('admin_home');
            }
            else
            {
                Session::flash('warning', 'User not found');
                return redirect()->back();
            }

        }
        // elseif($req->type == 1)
        // {
        //     // District Officer
        //     $user = User_district_officer::where([
        //         'username' => $req->username,
        //         'password' => $req->password
        //     ])->first();
        //
        //     if($user)
        //     {
        //         $req->session()->put('user', $user);
        //         Session::flash('success', 'login successfully');
        //         return redirect()->route('district_home');
        //     }
        //     else
        //     {
        //         Session::flash('warning', 'User not found');
        //         return redirect()->back();
        //     }
        //
        // }
        elseif($req->type == 2)
        {
            // Divisional Officer
            $user = User_divisional_officer::where([
                'username' => $req->username,
                'password' => $req->password
            ])->first();

            if($user)
            {
                $req->session()->put('user', $user);
                Session::flash('success', 'login successfully');
                return redirect()->route('division_home');
            }
            else
            {
                Session::flash('warning', 'User not found');
                return redirect()->back();
            }

        }
        elseif($req->type == 3)
        {
            // Upazila Nirbahi Officer
            $user = User_upazila_nirbahi_officer::where([
                'username' => $req->username,
                'password' => $req->password
            ])->first();

            if($user)
            {
                $req->session()->put('user', $user);
                Session::flash('success', 'login successfully');
                return redirect()->route('upazila_home');
            }
            else
            {
                Session::flash('warning', 'User not found');
                return redirect()->back();
            }

        }
        elseif($req->type == 4)
        {
            // Aratdar
            $user = User_aratdar::where([
                'username' => $req->username,
                'password' => $req->password
            ])->first();

            if($user)
            {
                $req->session()->put('user', $user);
                Session::flash('success', 'login successfully');
                return redirect()->route('aratdar_home');
            }
            else
            {
                Session::flash('warning', 'User not found');
                return redirect()->back();
            }
        }
    }

    // logout
    public function logout(Request $request)
    {

        $request->session()->flush();
        Session::flash('success', 'logout successfully');
        return redirect()->route('show_login');
    }


}
