<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterNewUserController;
use App\Jobs\AtualizaAddressBook;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Bus\Dispatcher;

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

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', 'RegisterNewUserController@create')->name('register');
Route::post('register', 'RegisterNewUserController@store');

Route::middleware('auth')->group(function(){
    Route::resource('users', UserController::class);
    Route::get('/', function () {
        return view('layouts.app');
    });
});



Route::get('/job', function () {

    // Mail::to('fabiohvieira@gmail.com')->send(new JobFailedMail());

    $job = new AtualizaAddressBook();
    $jobId = app(Dispatcher::class)->dispatch($job);
    print_r($job);
    print_r($jobId);

});
