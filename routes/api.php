<?php

use Illuminate\Support\Facades\Route;

// Display all bookings
// ==========
Route::get('/', [BookingsController::class, 'index'])->name('bookings.showAll');

// Retrieve single booking by ID
// ==========
Route::get('/{id}', [BookingsController::class, 'show'])->name('bookings.showSingle');

// Create booking
// ==========
Route::post('/create', [BookingsController::class, 'create'])->name('bookings.create');

// Edit booking by ID
// ==========
Route::put('/edit/{id}', [BookingsController::class, 'edit'])->name('bookings.edit');

// Reschedule booking by ID
// ==========
Route::patch('/edit/{id}', [BookingsController::class, 'edit'])->name('bookings.reschedule');

// Cancel booking without deletion
// ==========
Route::post('/cancel/{id}', [BookingsController::class, 'cancel'])->name('bookings.cancel');

// Delete booking
// ==========
Route::delete('/{id}', [BookingsController::class, 'destroy'])->name('bookings.delete');
