<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, "home"])->name('home');

//dentro de las llaves, 'curso' es el nombre de la entidad que si se deja solamente asi, 
//por defecto se utiliza el id de la entidad como parametro, pero si se especifiaca el
//campo, como en este caso 'slug', se utiliza ese campo. 
Route::get('/curso/{curso:slug}', [PageController::class, "curso"])->name('curso');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
