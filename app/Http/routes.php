<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//访问resources下的welcome.blade.php视图文件
//Route::get('/', function () {
//    return view('welcome');
//});

//访问sitesController控制器中的index方法
Route::get('/', 'SitesController@index');

//访问sitesController控制器中的about方法
Route::get('/about', 'SitesController@about');

Route::get('contact', 'SitesController@contact');

//查看生成路由 php artisan route:list
//Route::resource('articles',"ArticlesController");

Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{id}', 'ArticlesController@show');
Route::Post('/articles', 'ArticlesController@store');
Route::get('/articles/{id}/edit', 'ArticlesController@edit');
Route::put('/articles/{id}', 'ArticlesController@update');

//访问resources下的site文件夹的chen.blade.php视图文件
//Route::get('/', function () {
//    return view('site.chen');
//});

//直接返回字符串
//Route::get('/', function () {
//    return 'hello world';
//    //return view('welcome');
//});

//访问/about时返回字符串
//Route::get('/about', function () {
//    return 'hello';
//    //return view('welcome');
//});
