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

Auth::routes();
Auth::routes(['verify' => true]);

//User yang sudah login yang bisa mengakses route ini
Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->middleware('verified');

    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');
    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');
    Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');
    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');
    Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');
    Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
    )->name('io_generator_builder_generate_from_file');
    
    //hanya user dengan role admin yang bisa mengakses route ini
    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('users', 'UserController')->middleware('auth');
        Route::get('users/{id}/setrole', 'UserController@setrole')->name('users.setrole')->middleware('auth');
        Route::post('usersrole/{id}', 'UserController@saverole')->name('users.saverole')->middleware('auth');
        Route::resource('roles', 'RoleController');
        Route::get('roles/{id}/setpermission', 'RoleController@setpermission')->name('roles.setpermission')->middleware('auth');
        Route::post('roles/{id}/savepermission', 'RoleController@savepermission')->name('roles.savepermission')->middleware('auth');
        Route::resource('permissions', 'PermissionController');
    });
});
