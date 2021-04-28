<?php

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
    return view('pages.index');
});
// Route::get('/', 'PagesController@index');
Route::get('/save', "RegisterController@save")->name('save');
Route::get('/contact', 'PagesController@contact'); 
Route::get('/register', 'RegisterController@index');
Route::post('/store', "PostsController@store")->name('store');
Route::get('/posts', "PostsController@index");
Route::get('/regions', 'PagesController@regions');
Route::get('/terms', 'PagesController@terms');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/sitemap', 'PagesController@sitemap');
Route::get('/categories', 'PagesController@categories');
Route::get('/classified', 'PagesController@classified');
Route::get('/single', 'PagesController@single');
Route::get('/mobile', 'PagesController@mobile');
Route::get('/howit', 'PagesController@howit');
Route::get('/faq', 'PagesController@faq');
Route::get('/jobs', 'PagesController@jobs');
Route::get('/posts/{posts}', 'PostsController@show');

Route::get('signin', 'LoginController@index');

Route::post('/signin', 'LoginController@authenticate');
Route::post('/signout', 'LoginController@signout');
Route::get('logout', '\App\Http\Controllers\LoginController@logout');
// Auth::routes();
Route::post('/update', 'RegisterController@update');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PagesController@post');
Route::post('/change_pass', 'RegisterController@change_password');
Route::post('/search', 'PostsController@search');

Route::get('/password', function() {
    return view('pages.password');
});
Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/settings', function () {
    return view('pages.settings');
});
