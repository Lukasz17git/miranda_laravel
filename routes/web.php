<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfferDetailsController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\RoomDetailsController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\RoomslistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//what has access to what in terms of files?
//can i create anywhere any kind of file and the hole app ll still be working?
//what exact resources does the client have access to? only the public folder?
//what would be the fastest way to log the value of $id ?
//where exactly is the model, view and controller? (since its MVC)
//can you show us a small react app that uses MVC architecture in front end?
//exactly for what did we use docker? i did the steps and didnt have any errors so i honestly dont know if it was needed or not and for what
//why there is a contact model?


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/rooms', [RoomsController::class, 'index']);
Route::get('/roomslist', [RoomslistController::class, 'index']);
Route::get('/details/{room_id}', [RoomDetailsController::class, 'index']);
Route::get('/offers', [OffersController::class, 'index']);
Route::get('/offersdetails', [OfferDetailsController::class, 'index']);
