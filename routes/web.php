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

// Route::get('/', function () {
//     return view('welcome');
// });
	
Route::view('video','video')->middleware('auth');
Route::post('createvideo','UserController@createvideo')->name('createvideo')->middleware('auth');
Route::get('deletevideo/{id}','userController@deletevideo')->name('deletevideo')->middleware('auth');
Route::get('/','UserController@index')->name('homepage');
Route::any('/createPrice/{id}','UserController@createPrice')->name('createPrice');
Route::get('/installmentscheme','UserController@planfortommorrowhome')->name('planfortommorrowhome');
Route::view('/humanright','atonigbahome')->name('atonigbahome');
Route::get('dashboard','UserController@admin')->name('admin')->middleware('auth');

Route::any('/logout', 'HomeController@logout')->name('logout');
Route::get('planfortommorrowform','UserController@planfortommorrowform')->name('planfortommorrowform');
Route::post('saveplanfortommorrowform','UserController@saveplanfortommorrowform')->name('saveplanfortommorrowform');
Route::get('atonigbaform','UserController@atonigbaform')->name('atonigbaform');
Route::get('downloadatonigba/{id}','UserController@downloadatonigba')->name('downloadatonigba');
Route::get('downloadplanfortommorrow/{id}','UserController@downloadplanfortommorrow')->name('downloadplanfortommorrow');
Route::post('saveatonigbaform','UserController@saveatonigbaform')->name('saveatonigbaform');
Route::post('contact','UserController@contact')->name('contact');
Route::get('moudownload','UserController@moudownload')->name('moudownload')->middleware('auth');
Auth::routes();



Route::get('users','UserController@index')->name('user.index');



	

