<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    //http://mysite/public/city
    public function show()
    {
        return view('city.show',
            ['arr'=>[
            'title'=>'page title city',
            'city'=>'New York',
            'var1'=>'London',
            'var2'=>'Warsaw',
            'var3'=>'Paris',]
            ],
            ['location'=>[
                'country'=>'Poland',
                'city'=>'Lodz',
                ]
            ]
        );
    }
}
