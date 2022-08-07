<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\ClientController; 
use App\Http\Controllers\DonateController;
use App\Http\Controllers\AddonateController;
use App\Http\Controllers\ServiceController;


////////////////////////////// - ADMIN  PANEL - //////////////////////////////////////////////////////

    Route::resource('addonates', AddonateController::class);

    
////////////////////////////// - SITE - //////////////////////////////////////////////////////
    Route::get('/', [PostController::class, 'home'])->name('home.page');
    Route::get('/about-us', [PostController::class, 'about_us'])->name('about.us');
    Route::get('/contact', [PostController::class, 'contact'])->name('contact');

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

