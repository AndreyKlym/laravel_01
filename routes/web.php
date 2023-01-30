<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

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

Route::get('/post/{id}', [PostController::class, 'show']);
//Route::get('/post', [PostController::class, 'show']);

//http://mysite/public/city
Route::get('/city', [CityController::class, 'show']);
//Route::get('/city', [CityController::class, 'show']);

//http://mysite/public/user
//Route::get('/user/{surname}/{name}', [UserController::class, 'show']);
//Route::get('/user/{name}', [UserController::class, 'show']);
//Route::get('/user', [UserController::class, 'show']);

//http://mysite/public/user/all
//Route::get('/user/all', [UserController::class, 'all']);


Route::get('/user/{name}', [UserController::class, 'show']);






//http://mysite/public/
Route::get('/', function () {
    //return view('welcome');
    return '!!!';
});

//http://mysite/public/test
//Route::get('/test', function () {
//    return 'это запрос вывода /test';
//});

Route::get('/test', [PostController::class, 'show']);
Route::get('/city', [CityController::class, 'show']);
Route::get('/user', [UserController::class, 'show']);

//http://mysite/public/post/1
//Route::get('/post/{id}', function ($id) {
//    return 'это запрос вывода поста '. $id;
//});
//})->where('id', '[0-9]+');

//http://mysite/public/post/netal/12
//Route::get('/post/{catId}/{postId}', function ($catId, $postId) {
//    return 'это запрос вывода товара '. $catId .' '. $postId;
//});



//Route::get('/post/{slug}/{id}', function ($slug, $id) {
//    return 'это запрос вывода URL /'. $slug .'/'. $id;
//})->where('slug', '[a-z0-9_-]+')->where('id', '[0-9]+');


//http://mysite/public/post/name/
//Route::get('/post/{slug}', function ($slug) {
//    return 'это запрос вывода URL /'. $slug .'/';
//});


//http://mysite/public/posts/page/2
//Route::get('/posts/page/{page?}', function ($page=1){
//    return 'страница номер '. $page;
//});

Route::get('/post/all', function () {
    return 'all';
})->name('posts');





//http://mysite/public/user/Nick
//Route::get('/user/{name}', function ($name) {
//    return 'это запрос вывода имени usera '. $name;
//});

//http://mysite/public/user/Smith/Nick
//Route::get('/user/{surname}/{name}', function ($surname, $name) {
//    return 'это запрос вывода usera '.$name .' '.  $surname;
//});

//http://mysite/public/city
//Route::get('/city/{city?}', function ($city = 'Minsk'){
//   return 'это запрос вывода города ' . $city;
//});



//Route::get('/blog/post/all', function ($id) {
//    return 'all';
//});
//
//Route::get('/blog/post/{id}', function ($id) {
//    return $id;
//});


//Route::prefix('blog')->group(function (){
//    Route::get('/post/all', function () {
//        return 'all';
//    });
//
//    Route::get('/post/{id}', function ($id) {
//        return $id;
//    });
//});



//Route::prefix('admin')->group(function (){
//    Route::get('/users', function () {
//        return 'all';
//        })->name('useras');
//    Route::get('/user/{id}', function ($id) {
//        return $id;
//    });
//});


