<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ResumeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/download-cv', function () {
    $resume = \App\Models\Resume::latest()->first();

    if (!$resume) {
        abort(404);
    }

    return response()->download(
        storage_path('app/public/' . $resume->file_path),
        $resume->file_name
    );
})->name('resume.download');

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', function () {
            return redirect()->route('admin.projects.index');
        })->name('dashboard');

        Route::resource('projects', ProjectController::class);

        // profile
        Route::get(
            '/profile',
            [ProfileController::class, 'edit']
        )->name('profile.edit');

        Route::put(
            '/profile',
            [ProfileController::class, 'update']
        )->name('profile.update');

        // cv
        Route::get(
            '/resume',
            [ResumeController::class, 'edit']
        )->name('resume.edit');

        Route::put(
            '/resume',
            [ResumeController::class, 'update']
        )->name('resume.update');
    });
