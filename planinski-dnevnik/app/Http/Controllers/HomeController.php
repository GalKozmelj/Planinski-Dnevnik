<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function findLocation(Request $request){
        $lat = $request->lat;

        session(['success' => true, 'lat' => $lat]);

        return response()->json(['success' => true, 'lat'=>$lat]);

    }
}
