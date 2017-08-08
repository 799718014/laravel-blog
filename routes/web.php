<?php

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
    return view('welcome');
});


//登录注册路由
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

//web中间件，未登录不能访问
Route::group(['middleware'=>['web'],'prefix'=>'admin','namespace'=>'Admin'],function(){
    //Route::any('admin/index','Admin\IndexController@Index');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('category', 'CategoryController');
    Route::resource('article', 'ArticleController');


    Route::any('upload', 'CommonController@upload');

});

Route::get('uploads/{filename}', function ($filename) {

    // 这里可以做一些处理...
    header("Location: blog.lzx.com/uploads/" . $filename);
});

//前台
Route::any('home/index', 'Home\IndexController@index');