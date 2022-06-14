<?php


use App\Http\Controllers\Tutors\TutorsController;
use App\Http\Controllers\Tutors\TutorController;
use App\Http\Controllers\Tutors\MailController;

use App\Http\Controllers\Controller;
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

Route::get('/mail{id}', [MailController::class, 'write'])->name('write');


Route::group(['prefix' => '/tutors/', 'as' => 'tutors.'], function(){

    Route::get('destroy/{id}', [TutorController::class, 'destroy'])->name('destroy');

    Route::get('list', [TutorsController::class, 'list'])->name('list');

    Route::get('show/{id}', [TutorController::class, 'show'])->name('show');
});

Route::get('/{any}', [TutorsController::class, 'tutors.list'])->where('any','.*');