<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminsController extends Controller
{
    public function dashboard() {
    	return view('admin.dashboard');
    }

    public function userDetail() {
    	return view('admin.userDetail');
    }

    public function forms() {
    	return view('admin.forms');
    }

    public function notifications() {
    	return view('admin.notifications');
    }
}
