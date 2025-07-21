<?php
Route::group(['middleware' => ['auth','administrador']], function (){
 Route::resource('gestion/usuario', 'Sitedigitalweb\Usuario\Http\UsuarioController');
 Route::get('gestion/usuario/editar/{id}', 'Sitedigitalweb\Usuario\Http\UsuarioController@editar');
 Route::post('gestion/usuario/actualizar/{id}', 'Sitedigitalweb\Usuario\Http\UsuarioController@actualizar');
 Route::post('gestion/usuario/crear', 'Sitedigitalweb\Usuario\Http\UsuarioController@crear');
 Route::get('gestion/usuario/eliminar/{id}', 'Sitedigitalweb\Usuario\Http\UsuarioController@eliminar');
 Route::get('gestion/crear-usuario', 'Sitedigitalweb\Usuario\Http\UsuarioController@crearusuario');
});

Route::group(['middleware' => ['web']], function () {
  Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});