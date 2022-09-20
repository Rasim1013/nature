<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\ClientController; 
use App\Http\Controllers\DonateController;
use App\Http\Controllers\AddonateController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;



////////////////////////////// - ADMIN  PANEL - ////////////////////////////////////////////////////// az 18 to 21 kor kikht dalee nastroit chigo

Route::group(['middleware' => 'auth','admin'], function () {

    Route::resource('addonates', AddonateController::class);
    
});


Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'loginstore'])->name('login.store');
    Route::get('registration', [UserController::class, 'registration'])->name('registration');
    Route::post('registration', [UserController::class, 'registrationstore'])->name('register.store');
    Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

    
});


    
   
   

    
////////////////////////////// - SITE - //////////////////////////////////////////////////////
    Route::get('/', [PostController::class, 'home'])->name('home.page');
    Route::get('/about-us', [PostController::class, 'about_us'])->name('about.us');
    Route::get('/contact', [PostController::class, 'contact'])->name('contact');
    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');

    Route::get('logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

    Route::resource('experts', ExpertController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('donates', DonateController::class);
    Route::resource('services', ServiceController::class);  
    Route::get('account-service', [ServiceController::class, 'account_service'])->name('account.service');
    Route::get('members', [ServiceController::class, 'members'])->name('members');
    Route::get('legal-service', [ServiceController::class, 'legal_service'])->name('legal.service');
    Route::get('use-assets', [ServiceController::class, 'use_assets'])->name('use.assets');
    Route::get('prog-project', [ServiceController::class, 'prog_project'])->name('prog.project');
    Route::get('project', [ServiceController::class, 'project'])->name('project');
    Route::get('management', [ServiceController::class, 'management'])->name('management');
    Route::get('indicator', [ServiceController::class, 'indicator'])->name('indicator');
    Route::get('consultation', [ServiceController::class, 'consultation'])->name('consultation');

