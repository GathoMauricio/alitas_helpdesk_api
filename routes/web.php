<?php

use Illuminate\Support\Facades\Route;

Route::get('login', function () {
    return response()->json([
        'error' => 401,
        'type' => 'Unauthorized'
    ]);
})->name('login');
Route::get('generar_password/{token}', [\App\Http\Controllers\UserController::class, 'generarPassword']);

Route::get('fcm', function () {
    return App\Http\Controllers\NotificacionController::notificacionNuevoSeguimiento([
        'user_contact_id' => 52,
        'num_case' => 27,
        'body' => 'Test de credenciales',
        'case_id' => 52,
    ]);
});
