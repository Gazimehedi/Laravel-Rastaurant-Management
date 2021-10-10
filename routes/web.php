<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ChefsController;
use App\Http\Controllers\Admin\MealController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/',[FrontController::class, 'index'])->name('home');
Route::get('/redirects',[FrontController::class, 'redirects']);
Route::post('/make_reservation',[ReservationController::class, 'create']);
Route::post('/add_to_cart/{id}',[FrontController::class,'add_to_cart'])->name('add_to_cart');
Route::get('/cart',[FrontController::class,'cart'])->name('cart');
Route::get('/cart/delete/{id}',[FrontController::class,'cart_delete'])->name('cart.delete');
Route::post('/manageqty',[FrontController::class,'manageqty'])->name('manageqty');
Route::post('/orderproccess/{user_id}',[FrontController::class,'orderproccess'])->name('orderproccess');
Route::get('/thank_you',[FrontController::class,'thank_you'])->name('thank_you');

Route::middleware('admin_auth')->prefix('admin/')->group(function () {
    Route::get('dashboard',[FrontController::class,'dashboard'])->name('admin.dashboard');
    Route::get('users',[AdminController::class,'users'])->name('admin.users');
    Route::get('users/delete/{id}',[AdminController::class,'delete'])->name('admin.users.delete');
    Route::get('foodmenu',[FoodController::class,'foodmenu'])->name('admin.foodmenu');
    Route::get('addfoodmenu',[FoodController::class,'addfoodmenu'])->name('admin.addfoodmenu');
    Route::post('addfoodmenu',[FoodController::class,'addfoodmenu_process'])->name('admin.addfoodmenu_process');
    Route::get('editfoodmenu/{id}',[FoodController::class,'editfoodmenu'])->name('admin.editfoodmenu');
    Route::post('editfoodmenu/{id}',[FoodController::class,'updatefoodmenu'])->name('admin.updatefoodmenu');
    Route::get('foodmenu/delete/{id}',[FoodController::class,'delete'])->name('admin.foodmenu.delete');
    Route::get('reservation',[ReservationController::class,'reservation'])->name('admin.reservation');
    Route::get('reservation/delete/{id}',[ReservationController::class,'delete'])->name('admin.reservation.delete');

    Route::get('chefs',[ChefsController::class,'chefs'])->name('admin.shefs');
    Route::get('addchefs',[ChefsController::class,'addchefs'])->name('admin.addchefs');
    Route::post('addchefs',[ChefsController::class,'addchefs_process'])->name('admin.addchefs_process');
    Route::get('editchefs/{id}',[ChefsController::class,'editchefs'])->name('admin.editchefs');
    Route::post('editchefs/{id}',[ChefsController::class,'updatechefs'])->name('admin.updatechefs');
    Route::get('chefs/delete/{id}',[ChefsController::class,'delete'])->name('admin.chefs.delete');

    Route::get('orders',[OrderController::class,'orders'])->name('admin.orders');
    Route::get('orders/delete/{id}',[OrderController::class,'delete'])->name('admin.orders.delete');

    Route::get('logo',[SettingsController::class,'site_icon'])->name('admin.logo');
    Route::post('logo/{id}',[SettingsController::class,'logoUpdate']);

    Route::get('slider',[SettingsController::class,'slider'])->name('admin.slider');
    Route::post('addslider',[SettingsController::class,'addslider_process'])->name('admin.addslider_process');
    Route::get('editslider/{id}',[SettingsController::class,'editslider'])->name('admin.editslider');
    Route::post('editslider/{id}',[SettingsController::class,'updateslider'])->name('admin.updateslider');
    Route::get('slider/delete/{id}',[SettingsController::class,'delete'])->name('admin.slider.delete');

    Route::get('footerinfo',[SettingsController::class,'footerInfo'])->name('admin.footerInfo');
    Route::post('footerinfo/{id}',[SettingsController::class,'footerInfoUpdate']);
});




