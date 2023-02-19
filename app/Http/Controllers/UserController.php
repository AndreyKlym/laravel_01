<?php
namespace App\Http\Controllers;

class UserController extends Controller
{
    //http://mysite/public/user
    public function show()
    {
        return view('user.show', [
            'title'=>'page title user'
        ],
            [
                //'arrText' => '<b>Text</b>',
                'arrName' => '<b>Sam</b>',
                'isAuth' => false,
                'name' => 'John',
                'age' => 15
            ]
        );
    }

    //http://mysite/public/users
    public function all()
    {
        return view('user.all',
            //['arr'=> [
            //'title'=>'title users',
            //'name'=>'John',
            //'age'=>34,
            //'salary'=>1244
            //],
            //['arrNum'=>[
            //    'name'=>'John',
            //    'age'=>34,
            //    'salary'=>1244
            //]
        //]
        //        1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                ['data'=>[[1, 2, 3], [4, 5, 6], [7, 8, 9]],
                //['dataMod'=>[11,22,33,44,55]
                //[[1, 2, 3], [4, 5, 6], [7, 8, 9]];
        //['data'=>123]
        ]
        );
    }
//http://mysite/public/user/main
    public function main()
    {
        return view('user.main',
            ['users' => [
                [
                    'name' => 'user1',
                    'age' => 21,
                ],
                [
                    'name' => 'user2',
                    'age' => 22,
                ],
                [
                    'name' => 'user3',
                    'age' => 23,
                ],
            ]
            ]
        );
    }

    public function employ()
    {
        return view('user.employ',
        //['dataMod'=>[11,22,33,44,55]
         [	'employees' => [
             [
                 'name' => 'user1',
                 'surname' => 'surname1',
                 'salary' => 1000,
             ],
             [
                 'name' => 'user2',
                 'surname' => 'surname2',
                 'salary' => 2000,
             ],
             [
                 'name' => 'user3',
                 'surname' => 'surname3',
                 'salary' => 3000,
             ],
            ]
         ]
        );
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
