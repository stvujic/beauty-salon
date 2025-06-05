<?php

use App\Http\Controllers\Admin\AdminCommentController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AppointmentController as AdminAppointmentController;
use App\Http\Controllers\ContactMessagesController;


Route::get('/', function () {
    return view('home');
});
Route::get('/pricelist', [PageController::class, 'packages'])->name('public.packages');
Route::get('/comments', [PageController::class, 'comments'])->name('public.comments');
Route::get('/gallery', [PageController::class, 'gallery'])->name('public.gallery');
Route::post('/contact-message', [ContactMessagesController::class, 'store'])->name('contact.message.store');



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

    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

});

// Admin routes
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    //za termine
    Route::get('/admin/appointments', [AdminAppointmentController::class, 'index'])->name('admin.appointments');
    Route::delete('/admin/appointments/{id}', [AdminAppointmentController::class, 'destroy'])->name('admin.appointments.destroy');
    Route::patch('/admin/appointments/{appointment}/status', [AdminAppointmentController::class, 'updateStatus'])->name('admin.appointments.updateStatus');
    Route::resource('/admin/users', AdminUserController::class)->names('admin.users');

    //za pakete
    Route::resource('/admin/packages', PackageController::class)->names('admin.packages');

    //za komentare
    Route::get('/admin/comments', [AdminCommentController::class, 'index'])->name('admin.comments.index');
    Route::patch('/admin/comments/{comment}/approve', [AdminCommentController::class, 'approve'])->name('admin.comments.approve');
    Route::delete('/admin/comments/{comment}', [AdminCommentController::class, 'destroy'])->name('admin.comments.destroy');

    // za slike
    Route::get('/admin/gallery', [GalleryController::class, 'index'])->name('admin.gallery.index');
    Route::post('/admin/gallery', [GalleryController::class, 'store'])->name('admin.gallery.store');
    Route::delete('/admin/gallery/{galleryImage}', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');
    Route::patch('/admin/gallery/{galleryImage}/toggle-visibility', [GalleryController::class, 'toggleVisibility'])->name('admin.gallery.toggle');

});


require __DIR__.'/auth.php';
