<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Gate::allows('guards-only', Auth::user())){
            return view('home');
        } elseif(Gate::allows('tcos-only', Auth::user())){
            return view('home');
        } elseif(Gate::allows('admins-only', Auth::user())){
            return view('home');
        }
        return "You are not authorized for this page :(";
    }

    public function forms(){
        if(Gate::allows('guards-only', Auth::user())){
            return view('forms');
        } elseif(Gate::allows('admins-only', Auth::user())){
            return view('forms');
        }
        return "You are not authorized for this page :(";
    }

    public function tables(){
        if(Gate::allows('guards-only', Auth::user())){
            return view('tables');
        } 
        return "You are not authorized for this page :(";
    }


    public function notifications()
    {
        if(Gate::allows('guards-only', Auth::user())){
            return view('notifications');
        } elseif(Gate::allows('admins-only', Auth::user())){
            return view('notifications');
        }
        return "You are not authorized for this page :(";
    }

    public function crud(){
        if(Gate::allows('tcos-only', Auth::user())){
            return view('crud');
        } 
        return "You are not authorized for this page :(";
    }

    public function log(){
        if(Gate::allows('tcos-only', Auth::user())){
            return view('log');
        } 
        return "You are not authorized for this page :(";
    }

    public function userDetail()
    {
        if(Gate::allows('guards-only', Auth::user())){
            return view('userDetail');
        } elseif(Gate::allows('tcos-only', Auth::user())){
            return view('userDetail');
        } elseif(Gate::allows('admins-only', Auth::user())){
            return view('userDetail');
        }
        return "You are not authorized for this page :(";
    }

    public function registerNewUser(){
        if(Gate::allows('tcos-only', Auth::user())){
            return view('registerNewUser');
        }
        return "You are not authorized for this page :(";
    }



}
