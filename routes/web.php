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
Route::get('create-vikas', 'VikasController@CreateVikas');
Route::post('create-vikaSave', 'VikasController@CreateVikasSave');
Route::get('readVikas', 'VikasController@ReadVikas');
Route::get('edit_data/{vikas_id}', 'VikasController@edit_data');
Route::post('formupdate/{vikas_id}', 'VikasController@formupdate');

Route::get('createform','PiseController@CreateForm');
Route::post('createformsave','PiseController@CreateFormSave');
Route::get('readform','PiseController@Readform');
Route::get('editform/{pise_id}','PiseController@Editform');

