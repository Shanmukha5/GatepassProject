<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuardsController extends Controller
{
    public function dashboard(){
    	return view('guards.dashboard');
    }

    public function userDetail(){
    	return view('guards.userDetail');
    }

    public function forms() {
        return view('guards.forms');
    }

    public function tables() {
        return view('guards.tables');
    }

    public function notifications() {
        return view('guards.notifications');
    }

}
