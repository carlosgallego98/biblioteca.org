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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth:web'],function(){
    Route::get('perfil','HomeController@perfil')->name('perfil');
    Route::post('cambiar-contraseña', 'ProfileController@cambiarContraseña');
    Route::post('cambiar-imagen-perfil', 'ProfileController@cambiarAvatar');
    // Route::post('editar-imagen', 'ProfileController@cambiarContraseña');
});

Route::group(['prefix' => 'panel'], function () {
	Route::group(['namespace'=> "Admin"],function(){
    	Route::get("/","AdminController@panel")->name("admin.panel");
	});

	  Route::get("/usuarios","UsuarioController@index")->name("usuarios.index");
		Route::get("/usuarios/{user}","UsuarioController@show")->name("usuarios.show");
		Route::post("/usuarios/store","UsuarioController@store")->name("usuarios.store");
});
