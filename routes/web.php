<?php

use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactNoteController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskController;

    Route::fallback(function(){
        return "<h1>Sorry, the page you are looking for is not exist.</h1>";
    });

    Route::get('/', WelcomeController::class );

    Route::controller(ContactController::class)->name('contacts.')->group(function(){
        Route::get('/contacts','index' )->name('index');
        Route::get('/contacts/create','create')->name('create');
        Route::get('/contacts/{id}','show')->name('show');
    });

    Route::resource('/companies', CompanyController::class);
    Route::resources([
        '/tags' => TagController::class,
        '/taks' => TaskController::class
    ]);

    // Route::resource('/activities', ActivityController::class)->except([
    //     'index', 'show'
    // ]);

    // Route::resource('/activities', ActivityController::class)->names([
    //     'index' => 'activities.all',
    //     'show' => 'activities.view'
    // ]);

    Route::resource('/activities', ActivityController::class)->parameters([
        'activities' => 'active'
    ]);

    Route::resource('/contacts.notes', ContactNoteController::class)->shallow();
?>
