<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // showing login
    public function showLogin(){
        return view('login');
    }

    // processing login 
    public function handleLogin(Request $request){
        $username = $request->input('username');
        return redirect('/dashboard?username=' . $username);
    }

    // showing dashboard
    public function showDashboard(){
        return view('dashboard');
    }

    // showing dashboard
    public function showPengelolaan(){
        return view('pengelolaan');
    }

    // showing profile
    public function showProfile(){
        return view('profile');
    }
}
