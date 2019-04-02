<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserLocation;
use App\Location;

class CheckLocationController extends Controller
{

    public function check(Request $request)
    {
        $lat = $request->input('lat');
        $lon = $request->input('lon');
        $loc_id = $request->input('location_id');
        $user_id = \Auth::user()->id;
        return view('check_location', ['lat'=>$lat, 'lon'=>$lon, 'location_id'=>$loc_id, 'user_id'=>$user_id]);
    }

    public function store(Request $request)
    {
        $user_id = $request->user_id;
        $location_id = $request->location_id;
        $lat = $request->lat;
        $lon = $request->lon;
        $location = Location::where('id', $location_id)->first();

        if($location->lat <= $lat+0.011 || $location->lat >= $lat-0.011){
            if($location->lon <= $lon+0.011 || $location->lon >= $lon-0.011){
                $userlocation = new UserLocation;
                $userlocation->user_id = $user_id;
                $userlocation->location_id = $location_id;
                $userlocation->bool = true;
                $userlocation->save();
            }
        }

        return response()->json(['result'=>'bravo šlo je :)']);
    }

}
