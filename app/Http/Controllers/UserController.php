<?php
//⊗pplrPmCnAP
namespace App\Http\Controllers;

class UserController extends Controller
{
    //public function show()
    public function show($name)
    //public function show($surname, $name)
    {
    //    //return 'Hello, user';
    //    return 'Hello, ' . $name . ' '. $surname;
        //task #1
        $users = [
            'user1' => 'city1',
            'user2' => 'city2',
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5',
        ];
        //task #2
        if(array_key_exists($name, $users)){
            return $users[$name];
        }else{
            return 'в массиве $users нет такого ключа';
        }
    }

    public function all()
    {
        return 'Hello, alll users';
    }
}
