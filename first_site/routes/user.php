<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\IdentificationController;
use App\Http\Services\Localization\LocalizationService;
use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => LocalizationService::locale(),
        'middleware' => 'setLocale'
    ],
function (){
    Route::group(['prefix'=>'user' ], function (){
        Route::get('/', [HomeController::class, 'index'])->name('user.index');
        Route::get('/about', [HomeController::class, 'about'])->name('user.about');
        Route::get('/contact', [HomeController::class, 'contact'])->name('user.contact');

        Route::get('/{subcategory}/show', [HomeController::class, 'show'])->name('user.show');
        Route::get('/{video}/display', [HomeController::class, 'displayVideo'])->name('user.display');

        Route::post('/identification', [IdentificationController::class, 'identification'])->name('user.identification');
    });

});

