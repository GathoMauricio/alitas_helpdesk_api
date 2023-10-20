<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);
Route::any('/', function () {
    if (Auth::check()) {
        return App\Http\Controllers\HomeController::index();
    }
    return view('auth.login');
});
Route::get('/', function () {
    if (Auth::check()) {
        return App\Http\Controllers\HomeController::index();
    }
    return view('auth.login');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('generar_password/{token}', [\App\Http\Controllers\UserController::class, 'generarPassword']);
Route::get('show_caso/{}', [App\Http\Controllers\CasoController::class, 'show']);
Route::get('create_caso', [App\Http\Controllers\CasoController::class, 'create']);
Route::post('store_caso', [App\Http\Controllers\CasoController::class, 'store']);
Route::get('edit_caso/{id}', [App\Http\Controllers\CasoController::class, 'edit']);
Route::put('update_caso/{id}', [App\Http\Controllers\CasoController::class, 'update']);
Route::delete('delete_caso', [App\Http\Controllers\CasoController::class, 'delete']);
Route::get('cargar_seguimientos', [App\Http\Controllers\CasoController::class, 'cargarSeguimientos']);
Route::post('store_seguimiento', [App\Http\Controllers\CasoController::class, 'storeSeguimiento']);
Route::get('cargar_adjuntos', [App\Http\Controllers\CasoController::class, 'cargarAdjuntos']);
Route::post('store_adjunto', [App\Http\Controllers\CasoController::class, 'storeAdjunto']);

Route::get('api-obtener-tipos-servicio', [\App\Http\Controllers\TipoServicioController::class, 'apiObtenerTiposServicio']);
