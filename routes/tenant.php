<?php

declare(strict_types=1);

use App\Http\Controllers\Tenant\ProfileController;
use App\Http\Controllers\Tenant\SettingsController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Features\UserImpersonation;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {

    Route::get('/impersonate/{token}', function ($token) {
        return UserImpersonation::makeResponse($token);
    });

    Route::get('/', [\App\Http\Controllers\Tenant\HomeController::class, 'index'])->name('home');

    Auth::routes();

    Route::get('/faq', [\App\Http\Controllers\Tenant\HomeController::class, 'faq'])->name('home.faq');
    Route::get('/contact', [\App\Http\Controllers\Tenant\HomeController::class, 'contact'])->name('home.contact');

    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/complaints', [ProfileController::class, 'complaints'])->name('profile.complaints');
    Route::resource('complaints', \App\Http\Controllers\ComplaintsController::class);

    Route::get('/profile/show/{id?}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/complaints/{id?}', [ProfileController::class, 'complaints'])->name('profile.complaints');
    Route::get('/complaints', [\App\Http\Controllers\ComplaintsController::class, 'index'])->name('complaints.index');
    Route::get('/complaints/show/{id}', [\App\Http\Controllers\ComplaintsController::class, 'show'])->name('complaints.show');

    Route::group(['middleware' => 'auth'], function () {
        Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

        Route::post('/complaints/review/{id}', [\App\Http\Controllers\ComplaintsController::class, 'review'])->name('complaints.review');

        Route::group(['prefix' => 'settings'], function () {
            Route::get('/profile', [SettingsController::class, 'profile'])->name('settings.profile');
            Route::get('/security', [SettingsController::class, 'security'])->name('settings.security');
            Route::get('/notification', [SettingsController::class, 'notification'])->name('settings.notification');
        });

        Route::post('image/upload/store', [\App\Http\Controllers\FileUploadController::class, 'fileStore']);
        Route::post('image/delete',[\App\Http\Controllers\FileUploadController::class, 'fileDestroy']);
    });

    Route::group(['prefix' => 'admin'], function () {
//        Route::group(['middleware' => 'auth:admin'], function () {
            Route::post('logout', [\App\Http\Controllers\Tenant\Admin\AuthController::class, 'logout'])->name('admin.logout');

            Route::get('/', [\App\Http\Controllers\Tenant\Admin\HomeController::class, 'index'])->name('admin.index');
            Route::get('/users', [\App\Http\Controllers\Tenant\Admin\UserController::class, 'index'])->name('users.index');
            Route::get('/users/{user}', [\App\Http\Controllers\Tenant\Admin\UserController::class, 'destroy'])->name('users.destroy');

            Route::get('/complaints', [\App\Http\Controllers\Tenant\Admin\ComplaintsController::class, 'index'])->name('admin.complaints.index');
            Route::get('/settings', [\App\Http\Controllers\Tenant\Admin\SettingsController::class, 'index'])->name('admin.settings.index');
            Route::get('/settings/notifications', [\App\Http\Controllers\Tenant\Admin\SettingsController::class, 'notifications'])->name('admin.settings.notifications');
//        });

        Route::get('login', [\App\Http\Controllers\Tenant\Admin\AuthController::class, 'login'])->name('admin.login');
        Route::post('authenticate', [\App\Http\Controllers\Tenant\Admin\AuthController::class, 'authenticate'])->name('admin.auth');
    });
});
