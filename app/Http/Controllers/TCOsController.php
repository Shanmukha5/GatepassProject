<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TCOsController extends Controller
{
    public function dashboard() {
    	return view('TCO.dashboard');
    }

    public function crud() {
    	return view('TCO.crud');
    }

    public function log() {
    	return view('TCO.log');
    }

    public function userDetail() {
    	return view('TCO.userDetail');
    }
}
