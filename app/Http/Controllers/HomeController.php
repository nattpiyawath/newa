<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locale;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $lang = Locale::Active();
        return view('layout.andro.home')->with(['lang'=>$lang]);
    }

}