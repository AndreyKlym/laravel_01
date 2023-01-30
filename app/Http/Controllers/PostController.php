<?php
namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show()
    //public function show($id)
    {
        return view('post.show');
        //return view('test', [
        //    'var1'=>'1',
        //    'var2'=>'2',
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
