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

Route::get('/', ['as'=>'home', 'uses'=>'Admin\IndexController@show']);

Route::get('/page/{id?}', function ($id=5) {
    return view('page');
});

Route::group(['prefix'=>'admin'], function () {
    Route::get('page/create', function ()
    {
    	echo 1;
    });
});

Route::get('/about', ['as'=>'about', 'uses'=>'FirstController@show']);
Route::get('/articles', ['uses'=>'Admin\Core@getArticles', 'as'=>'articles']);
Route::get('/article/{page}', ['uses'=>'Admin\Core@getArticle', 'as'=>'article', 'middleware'=>'mymiddle']);

Route::resource('/pages', 'Admin\CoreResource');
?>