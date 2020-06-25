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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin login user student information
Route::resource('/students','StudentController');
Route::get('/archive/{id}','StudentController@archiveFollowup')->name('archiveFollowup');
Route::get('/backtofollowup/{id}','StudentController@backToFollowUP')->name('backToFollowUP');





// normal user login ( student information )
Route::resource('/student','studentForUserController');


/// all user (normal + admin)
Route::get('/view', 'userController@view')->name('view');
// Route::get('/addform', 'userController@addform')->name('addform');
Route::get('/register', 'userController@register')->name('register');
Route::post('/registeruser', 'userController@registeruser')->name('registeruser');
Route::delete('/deleteuser/{id}', 'userController@delete')->name('deleteuser');
Route::get('/viewformedituser/{id}', 'userController@viewformedituser')->name('viewformedituser');
Route::put('/update/{id}', 'userController@update')->name('update');


Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){

    Route::get('dashboard','DashboardController@index')->name('dashboard'); 

});

Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'User','middleware'=>['auth','user']], function (){

    Route::get('dashboard','DashboardController@index')->name('dashboard');

});


