<?php
namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show()
    //public function show($id)
    {

        //return view('post.show', ['arr'=>[12, 22]]);

        //return view('post.show');
        return view('post.show', [
            'title'=>'page title post',
            'text'=>'Search engine',
            'href'=>'https://www.google.com.ua/',
            'text1'=>'page content 1',
            'text2'=>'page content 2',
            'var'=>'red',
            ]);
        //$posts = [
        //    1=>'text 1',
        //    2=>'text 2',
        //    3=>'text 3',
        //    4=>'text 4',
        //    5=>'text 5',
        //];
        //return $posts[$id];

    }

    public function lab()
    {
        return view('post.employ',
            ['dataMod'=>[11,22,0,33,44,55,0,66]] );
    }


}
