<?php

/*
 * @Author: Hengky Alvinsius
 * @Date:   2018-11-16
 * @Last Modified by: Hengky Alvinsius
 * @Last Modified time: 2018-11-16
 */

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

Route::get('authors', array('uses'=>'authors@index'));

// users module
Route::get('users', array('uses'=>'UserController@index'));

Route::get('users/add', array('uses'=>'UserController@showAddUserForm'));
Route::post('users/add', array('uses'=>'UserController@doAddUser'));
//Route::resource('users','UserController');

