<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\FacebookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
Aqui tiene la apgina de aterrisaje
|
*/
Route::get('/', function () {
    return view('welcome');
})->name('web');

Route::get('/nosotros', function () {
    return view('web.inf');
})->name('nosotros');


Route::get('/service', function () {
    return view('web.services');
})->name('service');


Route::get('/contactos', function () {
    return view('web.contactos');
})->name('contactos');


Route::resource('privilegio', 'PrivilegioController')->names('privilegio')->middleware('auth');
Route::resource('reportes_admin', 'Reportes_Admin_Controller')->names('reportes_admin')->middleware('auth');

Route::get('/reporte/pdf/{id}', 'List_Reporte_Controller@pdf')->name('reporte.pdf');
Route::get('reporte/excel/{id}', [App\Http\Controllers\ExcelController::class, 'exportExcel'])->name('reporte.excel');

Route::get('categorie', 'CategoryController@create');
Route::post('categorie', 'CategoryController@store')->name('categorie')->middleware('auth');
Route::resource('categories', 'CategoryController')->names('categories')->middleware('auth');
Route::resource('reportes', 'ReporteController')->names('reportes')->middleware('auth');
Route::resource('lis_reporte', 'List_Reporte_Controller')->names('list_reportes')->middleware('auth');
Route::resource('imagens', 'ImagenController')->names('imagens');
Route::resource('dato', 'DatosController')->names('dato')->middleware('auth');
Route::resource('List', 'ListController')->names('list')->middleware('auth');
Route::resource('user', 'UserController')->names('user')->middleware('auth');
Route::resource('pass', 'PassController')->names('pass')->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home.index')->middleware('auth');
Route::group(['middleware' => ['guest']], function() {
    /**
     * Register Routes
     */
    Route::get('/register', 'RegisterController@show')->name('register.show');
    Route::post('/register', 'RegisterController@register')->name('register.perform');
    /**
     * Login Routes
     */
    Route::get('/logiar', 'LoginController@show')->name('logiar.show');

    Route::post('/logiar', 'LoginController@login')->name('logiar.perform');


    Route::get('/inicio', function () {
        return view('vendor/laravelpwa/offline');})->name('inicio');

});


Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Routes
     */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});


Route::get('/Plantilla', function () {
    return view('Plantilla');
});


Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

Route::get('auth/facebook', [FacebookController::class, 'redirect'])->name('facebook-auth');
Route::get('auth/facebook/callback', [FacebookController::class, 'callbackFacebook']);


Route::get('/recover', 'RecoverController@recover')->name('recover');
Route::post('/recover', 'RecoverController@recoverPost')->name('recover.post');

Route::get('/reset-password/{token}', 'RecoverController@resetPassword')->name('reset.password');
Route::post('/reset-password', 'RecoverController@resetPasswordPost')->name('reset.password.post');
