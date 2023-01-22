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

Route::get('/', function () {
    return '!!!';
    //return view('welcome');
});

Route::get('/test', function () {
    return 'это запрос вывода /test';
    //return view('welcome');
});

Route::get('/dir/test', function () {
    return 'это запрос вывода "Какого-нибудь сообщения!"';
    //return view('welcome');
});

//Route::get('/post/{id}', function ($id) {
//    return 'пост ' . $id;
////});
//})->where('id', '[0-9]+');

//Route::get('/post/{catId}/{postId}', function ($catId, $postId) {
//    return $catId . ' ' . $postId;
//});

///user/:surname/:name/
//Route::get('/user/{surname}/{name}', function ($surname, $name) {
//    return $surname . ' ' . $name;
//});

//Необязательные параметры маршрутов
//Route::get('/posts/page/{page?}', function ($page=1) {  // - значение по умолчанию
//    return 'страница номер ' . $page;
//});

//http://mysite/public/city/Kiyv
Route::get('/city/{city?}', function ($city='Minsk') {
    return 'My city is  ' . $city;
});

///user/:id
//Route::get('/user/{id}', function ($id){
//    return '$user '. $id;
//})->where('id', '[0-9]+');

//Route::get('/post/{slug}/{id}', function ($slug, $id) {
//    return 'пост ' . $slug . ' ' . $id;
//});

Route::get('/post/{slug}/{id}', function ($slug, $id) {
    return 'пост ' . $slug . ' ' . $id;
})->where('slug', '[a-z0-9_-]+')->where('id', '[0-9]+');

//task #1
///user/:id/:name
Route::get('/user/{id}/{name}', function ($id, $name){
    return 'пользователь #'. $id . ' с именем ' .$name;
})->where('id', '[0-9]+')->where ('name', '[a-zA-Z]{2,}');

//task #2
///posts/:date
//дата в формате год-месяц-день
Route::get('/posts/{date}', function ($date){
    return 'статья от '. $date;
})->where('date', '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])');

//task #3
///:year/:month/:day
Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    return 'это число ' . $day . '-' . $month . '-' . $year;
})->where('year', '[0-9]{4}')->where('month', '(0[1-9]|1[012])')->where('day', '(0[1-9]|1[0-9]|2[0-9]|3[01])');
//})->where(['year' => '[0-9]{4}', 'month'=>'(0[1-9]|1[012])', 'day'=>'(0[1-9]|1[0-9]|2[0-9]|3[01])']);

//task #4
///users/:order
Route::get('/users/{order}', function($order) {
    return 'пользователь ' . $order;
})->where('order', 'name|surname|age');

