<?php

namespace App\Http\Services\Localization;

use Illuminate\Support\ServiceProvider;

class LocalizationServiceProvider extends ServiceProvider{
    public function register(){
        $this->app->bind("Localization", 'App\Http\Services\Localization\Localization');
    }

}
