<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    //http://mysite/public/city
    public function show()
    {
        return view('city');
    }
}
