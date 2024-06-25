<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\DishController;
use App\Http\Controllers\OrderStatisticsController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('home');
        // Rotte CRUD
        Route::resource('restaurants', RestaurantController::class);
        Route::resource('dishes', DishController::class);
        // Rotte custom
        Route::get('orders', [DishController::class, 'dishOrders'])->name('dish-orders');
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/statistics', [OrderStatisticsController::class, 'index'])->name('statistics.index');


require __DIR__ . '/auth.php';
