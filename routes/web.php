<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('register', [RegisterController::class, 'showRegistrationForm'])
  ->name('register')
  ->middleware('hasInvitation');


Route::get('register/request', [RegisterController::class, 'requestInvitation'])->name('requestInvitation');

Route::post('invitations', [InvitationController::class, 'store'])->middleware('guest')->name('storeInvitation');
Route::group([
    'middleware' => ['auth'],
    'prefix' => 'invitations'
], function() {
    Route::get('/', [InvitationController::class, 'index'])->name('showInvitations');
});



Route::get('/home', [HomeController::class, 'index'])->name('home');


