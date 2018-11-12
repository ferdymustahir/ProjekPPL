<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use Auth;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::User()->level=='1') {
            $tampil = barang::all();
        return view('berandaadmin', compact('tampil'));
        }
        else if (Auth::User()->level=='2') {
            $tampil = barang::all();
            return view('home',compact('tampil'));
        }
        
    }
}
