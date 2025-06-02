<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated user routes
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User dashboard
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');

    // Appointment routes
    Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::get('/myappointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/available-slots', [AppointmentController::class, 'getAvailableSlots'])->name('appointments.available-slots');
    Route::get('/available-times', [AppointmentController::class, 'availableTimes'])->name('appointments.available_times');
});

// Admin routes
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/appointments', [AdminAppointmentController::class, 'index'])->name('admin.appointments');
    Route::delete('/admin/appointments/{id}', [AdminAppointmentController::class, 'destroy'])->name('admin.appointments.destroy');
});

require __DIR__.'/auth.php';
