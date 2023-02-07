<?php
namespace App\Http\Controllers;

class TestController extends Controller
{
    public function main()
    //public function show($id)
    {

        return view('main', ['arr'=>[12, 22]]);
        //return view('test.main', ['arr'=>[12, 22]]);

        //return view('post.show');
        //return view('test', [
        //    'title'=>'page title post',
        //    'text'=>'Search engine',
        //    'href'=>'https://www.google.com.ua/',
        //    'text1'=>'page content 1',
        //    'text2'=>'page content 2',
        //    'var'=>'red',
        //    ]);

        //$posts = [
        //    1=>'text 1',
        //    2=>'text 2',
        //    3=>'text 3',
        //    4=>'text 4',
        //    5=>'text 5',
        //];
        //return $posts[$id];

    }
}
