<?php
//⊗pplrPmRtSPC
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/user/{id}', function ($id) {
    return 'пользователь с номером '. $id;
})->whereNumber('id');
//})->whereAlpha('slug');
//})->whereAlphaNumeric('slug');

Route::get('/city/{name}', function ($name) {
    return 'город '. $name;
})->whereAlpha('$name');

//Route::get('/post/{id}', function ($id){
//    return '!!! post ' . $id;
//});

Route::get('/post/{slug}', function ($slug){
    return '!!! post ' . $slug;
});

Route::prefix('admin')->group(function(){
    Route::get('/admin/users', function ($id) {
        return 'all';
    });
    Route::get('/admin/user/{id}', function ($id) {
        return $id;
    });
});

Route::get('/post/all', function (){
    return 'all';
})->name('posts');

