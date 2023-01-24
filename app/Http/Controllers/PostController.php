<?php
namespace App\Http\Controllers;

class PostController extends Controller
{
    //public function show()
    public function showpost()
    //public function show($id)
    {
        //return 'hello world';
        //return 'post ' . $id;
        //$posts = [
        //    1=>'text post 1',
        //    2=>'text post 2',
        //    3=>'text post 3',
        //    4=>'text post 4',
        //    5=>'text post 5',
        //    6=>'text post 6',
        //    7=>'text post 7',
        //];
        //return $posts[$id];

        //return view('test');
        //return view('test', ['var1' => '1', 'var2' => '2']);

        return view('post.show');
        return view('post.showpost', ['var1' => '1', 'var2' => '2']);

    }

}
