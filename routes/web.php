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
})->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','namespace' => 'Admin','middleware'=>['auth','admin']],
function(){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    Route::group(['prefix'=> 'categories'],function(){
        Route::get('/','CategoryController@index')->name('category');
        Route::get('/create','CategoryController@create')->name('category.create');
        Route::post('/store','CategoryController@store')->name('category.store');
        Route::get('/edit/{id}','CategoryController@edit')->name('category.edit');
        Route::post('/update/{id}','CategoryController@update')->name('category.update');
        Route::get('/delete/{id}','CategoryController@destroy')->name('category.delete');

    });
    Route::group(['prefix' => '/subcategories'],function(){
        Route::get('/','SubCategoryController@index')->name('subcategory');
    Route::get('/create','SubCategoryController@create')->name('subcategory.create');
    Route::post('/store','SubCategoryController@store')->name('subcategory.store');
    Route::get('/edit/{id}','SubCategoryController@edit')->name('subcategory.edit');
    Route::post('/update/{id}','SubCategoryController@update')->name('subcategory.update');
    Route::get('/delete/{id}','SubCategoryController@destroy')->name('subcategory.delete');
    });
});

// Public Home Page Routes

Route::get('/free','HomeController@freeFiles')->name('freefiles');
Route::get('/info/seller','HomeController@seller')->name('seller');
Route::get('/info/affilate','HomeController@affilate')->name('affilate');
Route::get('/upload','HomeController@upload')->name('upload');
Route::get('/forum','HomeController@forum')->name('forum');
Route::get('/collection','HomeController@collection')->name('collection');