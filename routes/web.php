<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/redirects',[HomeController::class,'redirects']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//home page
Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/booking',[HomeController::class,'booking'])->name('reservation');



//admin
Route::get('/allusers',[AdminController::class,'user'])->name('user');
Route::get('/allreservation',[AdminController::class,'allreservation'])->name('allreservation');
Route::get('/order',[AdminController::class,'order'])->name('admin.order');
Route::get('/delete/{id}',[AdminController::class,'delete'])->name('deleteuser');
Route::get('/deleteFood/{id}',[AdminController::class,'deleteFood'])->name('deletefood');
Route::get('/deleteBooking/{id}',[AdminController::class,'deleteBooking'])->name('deleteBooking');
Route::get('/UpdateFood/{id}',[AdminController::class,'updatefoodForm'])->name('updatefoodForm');
Route::get('/addmenu',[AdminController::class,'menu'])->name('admin.addmenu');
Route::get('/allmenu',[AdminController::class,'allmenu'])->name('admin.allmenu');
Route::post('/foodupload',[AdminController::class,'upload'])->name('food-upload');
Route::post('/editfood/{id}',[AdminController::class ,'editfood'])->name('foodupdate');
Route::post('/cheifupdate/{id}',[AdminController::class ,'cheifupdate'])->name('cheifupdate');
Route::get('/updateCheifForm/{id}',[AdminController::class ,'updateCheifForm'])->name('updateCheifForm');
Route::post('/search',[AdminController::class ,'search'])->name('search');
//cheif
Route::get('/addcheif',[AdminController::class,'addcheif'])->name('addcheif');
Route::get('/allcheif',[AdminController::class,'allcheif'])->name('allcheif');
Route::get('/deletecheif/{id}',[AdminController::class,'deletecheif'])->name('deletecheif');
Route::post('/cheif/upload',[AdminController::class,'cheifupload'])->name('cheif-upload');
//cart
Route::post('/addcart/{id}',[HomeController::class,'addcart'])->name('addcart');
Route::get('/showcart/{id}',[HomeController::class,'showcart'])->name('showcart');
Route::get('/remove/{id}',[HomeController::class,'remove'])->name('remove');
Route::post('/orderconfirm',[HomeController::class,'orderconfirm'])->name('orderconfirm');
