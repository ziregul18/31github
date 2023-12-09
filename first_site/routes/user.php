<?php

use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'user' ], function (){
    Route::get('/', [HomeController::class, 'index'])->name('user.index');

});
