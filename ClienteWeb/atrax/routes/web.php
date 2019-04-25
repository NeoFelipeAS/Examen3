<?php

Route::get('/', function () {
    return view('inicio');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tiquetes', 'HomeController@tiquetes');
Route::get('/tiquete-detalle', 'HomeController@tiqueteDetalle');
Route::get('/talleres', 'HomeController@talleres');
Route::get('/usuarios', 'HomeController@usuarios');
Route::get('/clientes', 'HomeController@clientes');
Route::get('/facturas', 'HomeController@facturas');
Route::get('/factura-detalle', 'HomeController@facturaDetalle');
Route::get('/reportes', 'HomeController@reportes');


// Authentication Routes...
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', [
  'as' => '',
  'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('password/email', [
  'as' => 'password.email',
  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
  'as' => 'password.request',
  'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
  'as' => '',
  'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
  'as' => 'password.reset',
  'uses' => 'Auth\ResetPasswordController@showResetForm'
]);