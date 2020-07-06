<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaxonomyController;
//Blogページ
Route::get('/','CategoryController@home');
Route::get('/category/{category}','CategoryController@indicate');
Route::get('login','LoginController@__construct');
//記事ページ
Route::get('/category/{category}/{slug}','CategoryController@show');
//管理者ページ
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin','HomeController@admin')->name('admin');
Route::prefix('admin')->group(function() {
    Route::get('home','HomeController@admin');
    Route::get('addArticle','PostController@addForm');
    Route::post('addArticle','PostController@add');
    Route::get('articleList','PostController@list');
    Route::get('articleEdit','PostController@editForm');
    Route::post('articleEdit','PostController@edit');
    Route::post('articleUpdate','PostController@update');
    Route::get('articleDelete','PostController@deleteForm');
    Route::post('articleDelete','PostController@delete');
    Route::get('register','AdminController@registerForm');
    Route::post('register','AdminController@register');
    Route::get('userList','AdminController@list');
    Route::get('pwSelect','AdminController@selectForm');
    Route::post('pwEditForm','AdminController@editForm');
    Route::post('pwUpdate','AdminController@update');
    Route::get('classAdd','TaxonomyController@addForm');
    Route::post('classAdd','TaxonomyController@add');
    Route::get('classList','TaxonomyController@list');
    Route::get('classSelect','TaxonomyController@selectForm');
    Route::post('classSelect','TaxonomyController@editForm');
    Route::post('classUpdate','TaxonomyController@update');
    Route::get('classDelete','TaxonomyController@deleteForm');
    Route::post('classDelete','TaxonomyController@delete');
});
?>
