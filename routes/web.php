<?php

use App\Http\Controllers\BreastAestheticsController;
use App\Http\Controllers\LiposuctionController;
use App\Http\Controllers\MommyMakeoverController;
use App\Http\Controllers\GynecomastiaController;
use App\Http\Controllers\MM2Controller;
use App\Http\Controllers\TummyTuckController;
use App\Http\Controllers\FaceliftController;
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

Route::group(['prefix' => '{locale}'], function () {
    ## Breast Aesthetics LP
    Route::group(['prefix' => 'breast-aesthetics', 'as' => 'breast-aesthetics'], function () {
        Route::get('/', [BreastAestheticsController::class, 'home'])->name('.home');
        Route::get('/gallery', [BreastAestheticsController::class, 'gallery'])->name('.gallery');
    });

    ## Liposuction LP
    Route::group(['prefix' => 'liposuction', 'as' => 'liposuction'], function () {
        Route::get('/', [LiposuctionController::class, 'home'])->name('.home');
        Route::get('/gallery', [LiposuctionController::class, 'gallery'])->name('.gallery');
    });

    ## Mommy Makeover LP
    Route::group(['prefix' => 'mommy-makeover', 'as' => 'mommy-makeover'], function () {
        Route::get('/', [MommyMakeoverController::class, 'home'])->name('.home');
        Route::get('/gallery', [MommyMakeoverController::class, 'gallery'])->name('.gallery');
    });

    ## Mommy Makeover LP 2
    Route::group(['prefix' => 'mm2', 'as' => 'mm2'], function () {
        Route::get('/', [MM2Controller::class, 'home'])->name('.home');
        Route::get('/gallery', [MM2Controller::class, 'gallery'])->name('.gallery');
    });

    ## Tummy Tuck LP
    Route::group(['prefix' => 'tummy-tuck', 'as' => 'tummy-tuck'], function () {
        Route::get('/', [TummyTuckController::class, 'home'])->name('.home');
        Route::get('/gallery', [TummyTuckController::class, 'gallery'])->name('.gallery');
    });

    ## Tummy Tuck LP
    Route::group(['prefix' => 'facelift', 'as' => 'facelift'], function () {
        Route::get('/', [FaceliftController::class, 'home'])->name('.home');
        Route::get('/gallery', [FaceliftController::class, 'gallery'])->name('.gallery');
    });

       ## Gynecomastia LP
    Route::group(['prefix' => 'gynecomastia', 'as' => 'gynecomastia'], function () {
        Route::get('/', [GynecomastiaController::class, 'home'])->name('.home');
        Route::get('/gallery', [GynecomastiaController::class, 'gallery'])->name('.gallery');
    });
});

