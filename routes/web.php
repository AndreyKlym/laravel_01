<?php
//⊗pplrPmCnAP
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
//task #1
use App\Http\Controllers\UserController;
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

//Route::get('/post/{slug}', function ($slug){
//    return '!!! post ' . $slug;
//});

Route::prefix('admin')->group(function(){
    Route::get('/admin/users', function ($id) {
        return 'all';
    });
    Route::get('/admin/user/{id}', function ($id) {
        return $id;
    });
});

//Route::get('/post/all', function (){
//    return 'all';
//})->name('posts');

//Route::get(маршрут, [полное имя контроллера, имя действия]);
//Route::get('/post', ['App\\Http\\Controller\\PostController', 'show']);
//http://mysite/public/post
//Route::get('/post', [PostController::class, 'show']);
//http://mysite/public/post/:id
Route::get('/post/{id}', [PostController::class, 'show']);

Route::get('/user', [UserController::class, 'show']);
//http://mysite/public/user/:name
Route::get('/user/{name}', [UserController::class, 'show']);

//http://mysite/public/user/:surname/:name
Route::get('/user/{surname}/{name}', [UserController::class, 'show']);

Route::get('/user/all', [UserController::class, 'all']);

//http://mysite/public/user/user2
//task #1
Route::get('/user/{name}', [UserController::class, 'show']);

