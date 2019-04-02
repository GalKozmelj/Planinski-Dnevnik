<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckLocationController extends Controller
{

    public function check()
    {
        return view('check_location');
    }

}
