<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AppController;

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

Route::namespace('Web')->group(function () {
    Route::get('/', function() {return view('under-construction');});
    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'localize', 'localeCookieRedirect', 'localizationRedirect', 'localeViewPath' ]
        ], function() {
            Route::get('/{vueroute?}', [AppController::class, 'index'])->where('vueroute', '[\/\w\.-]*')->name('app.index');
        }
    );
});
