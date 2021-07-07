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

Route::get('/', [
    'uses' => 'TaskController@getIndex',
    'as' => 'index'
]);

Route::post('/add', [
    'uses' => 'TaskController@postAddTask',
    'as' => 'add'
]);

Route::get('/{id}/edit', [
    'uses' => 'TaskController@getEditTask',
    'as' => 'getEdit'
]);

Route::post('/edit', [
    'uses' => 'TaskController@postEditTask',
    'as' => 'edit'
]);

Route::get('/{id}/delete', [
    'uses' => 'TaskController@getDeleteTask',
    'as' => 'delete'
]);

Route::get('/home', function() {
    return redirect()->route('index');
});

Auth::routes();
