<?php

namespace App\Http\Services\Localization;



class Localization{
    public function locale(){
        $locale = request()->segment(1, '');

        if($locale && in_array($locale, ['ky','tr'])){
            return $locale;
        }

        return "";
    }
}
