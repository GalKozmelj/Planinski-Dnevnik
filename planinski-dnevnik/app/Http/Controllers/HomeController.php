<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Location;

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
        $lon = $request->lon;

        $location = \App\Location::whereBetween('lat', [$lat-0.0011, $lat+0.0011]) //0.0011 stopinj je približno 120 metrov
                                 ->whereBetween('lon', [$lon-0.0011, $lon+0.0011])
                                 ->first();

        return response()->view('make-post', ['lat' => $lat, 'lon'=>$lon, 'loc'=>$location]);
    }
}
