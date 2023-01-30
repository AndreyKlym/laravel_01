<?php
namespace App\Http\Controllers;

class UserController extends Controller
{
    //http://mysite/public/user
    //public function show($surname, $name)
    ////public function show($name)
    //{
    //    return 'Show user '.$surname.' '. $name;
    //    //return 'Show user '. $name;
    //}

    //http://mysite/public/user/all
    public function all()
    {
        return 'Show users all';
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
