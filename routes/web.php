<?php

use App\Http\Controllers\FormularioController;
use Illuminate\Support\Facades\Route;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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
    return view('portfolio');
});

Route::get('/descargar-cv', [FormularioController::class,'descargar_cv']);

Route::post('contactanos', [FormularioController::class, 'sendContactForm'])->name('send-email');
