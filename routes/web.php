<?php


Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => 'auth'], function (){

    Route::get('dashboard',              [ 'as'=>'dashboard',            'uses' => 'DashboardController@index']);

    Route::get('user',                   [ 'as'=>'user',                 'uses' => 'UserController@index']);
    Route::get('user/create',            [ 'as'=>'user.create',          'uses' => 'UserController@create']);
    Route::post('user/store',            [ 'as'=>'user.store',           'uses' => 'UserController@store']);
    Route::get('user/view/{id}',         [ 'as'=>'user.view',            'uses' => 'UserController@view']);
    Route::get('user/edit/{id}',         [ 'as'=>'user.edit',            'uses' => 'UserController@edit']);
    Route::post('user/update/{id}',           [ 'as'=>'user.update',     'uses' => 'UserController@update']);
    Route::get('user/delete/{id}',       [ 'as'=>'user.delete',          'uses' => 'UserController@delete']);
    Route::get('user/search',       [ 'as'=>'user.search',      'uses' => 'UserController@search']);

    Route::get('employee',               [ 'as'=>'employee',              'uses' => 'EmployeeController@index']);
    Route::get('employee/create',        [ 'as'=>'employee.create',       'uses' => 'EmployeeController@create']);
    Route::post('employee/store',        [ 'as'=>'employee.store',        'uses' => 'EmployeeController@store']);
    Route::get('employee/edit/{id}',     [ 'as'=>'employee.edit',         'uses' => 'EmployeeController@edit']);
    Route::post('employee/update/{id}',  [ 'as'=>'employee.update',       'uses' => 'EmployeeController@update']);
    Route::get('employee/delete/{id}',   [ 'as'=>'employee.delete',       'uses' => 'EmployeeController@delete']);
   

    Route::get('profile',[ 'as'=>'profile','uses' => 'ProfileController@index']);
    Route::get('change-password',[ 'as'=>'change.password','uses' => 'ProfileController@changePassword']);

    Route::match(['get','match'],'update-password',[ 'as'=>'update.password','uses' =>'ProfileController@updatePassword']);

});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




