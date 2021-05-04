<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('pages/home');
// })->name('home');// On va donné un nom à notre route

// refactoring récente version php méthode 2
//Route::get('/', fn() => view('pages/home'))->name('home');

// refactoring récente version php méthode 3
Route::view('/', 'pages.home')->name('home');


// Route::get('/about-us', function () {
//     return view('pages.about');
// })->name('about'); // On va donné un nom à notre route

// refactoring récente version php méthode 2
//Route::get('/about', fn() => view('pages.about'))->name('about');
// refactoring récente version php méthode 3
Route::view('/about', 'pages.about')->name('about');

//Route::get('/help', fn() => view('pages.help'))->name('help');
Route::view('/help', ('pages.help'))->name('help');

// route pour auth et compte
Auth::routes();
Route::get('/compte', [HomeController::class, 'index'])->name('compte');


