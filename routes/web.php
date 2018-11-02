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


//rutas desde web
//Route::get('/rol', 'RolController@index'); //sirve
//Route::get('/usuario', 'UsuarioController@index');
//Route::get('/career', 'CareerController@index'); //sirve
//Route::get('/idiom', 'IdiomController@index'); //sirve
//Route::get('/degree', 'DegreeController@index'); //sirve
//Route::get('/user_info', 'UserInfoController@index'); //sirve
//Route::get('/user_language', 'UserLanguageController@index');
//Route::get('/user_roles', 'UserRolesController@index');
//Route::get('/idiom_certificate', 'IdiomCertificateController@index'); //sirve
//Route::get('/idiom_level', 'IdiomLevelController@index'); //sirve

//rutas con vistas
Route::get('/tabla_rol', 'RolController@index')->name('Rol.index'); //sirve
Route::get('/tabla_usuario', 'UsuarioController@index')->name('Usuario.index'); //sirve
Route::get('/tabla_career', 'CareerController@index')->name('Career.index');
Route::get('/tabla_idiom', 'IdiomController@index')->name('Idiom.index');
Route::get('/tabla_degree', 'DegreeController@index')->name('Degree.index');
Route::get('/tabla_user_info', 'UserInfoController@index')->name('User_info.index');
Route::get('/tabla_user_language', 'UserLanguageController@index')->name('User_language.index');
Route::get('/tabla_user_roles', 'UserRolesController@index')->name('User_roles.index');
Route::get('/tabla_idiom_certificate', 'IdiomCertificateController@index')->name('Idiom_certificate.index');
Route::get('/tabla_idiom_level', 'IdiomLevelController@index')->name('Idiom_level.index');