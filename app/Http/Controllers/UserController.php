<?php
namespace App\Http\Controllers;

class UserController extends Controller
{
    //http://mysite/public/user
    public function show()
    {
        return view('user.show', ['arr'=>[
        //return view('user.show', [
            'title'=>'page title user',
            'name'=>'Nick',
            'surname'=>'Smith',
            'age'=>23,
            'var'=>'main',]
            //'year'=>2018
            ], ['myData'=>[
                'year'=>2022,
                'mounth'=>'May',
                'day'=>'Sunday'
                ]
            ]
        );
    }

    //http://mysite/public/user/all
    public function all()
    {
        return view('user.show',['arr'=> ['name'=>'John', 'age'=>34, 'salary'=>1244]]);
        //return view('test',['arr'=> [11, 22]]);
        //return view('user.test',['arr'=> [11, 22]]);
        //return 'Show users all';
    }

    //public function show($name)
    //{
    //    $users = [
    //        'user1' => 'city1',
    //        'user2' => 'city2',
    //        'user3' => 'city3',
    //        'user4' => 'city4',
    //        'user5' => 'city5',
    //    ];
    //    if(array_key_exists($name, $users)){
    //        return 'Show user\'s ' . $users[$name];
    //    }else{
    //        return "в данном массиве нет такого ключа $name";
    //    }
    //}



}
