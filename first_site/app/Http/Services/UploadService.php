<?php

namespace App\Http\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;

class UploadService
{
    public function upload(UploadedFile $file, $path): string
    {
        $image = $file;
        $name = str_replace(['/', '.'], '', Hash::make(time() . rand(10000000, 9999999)));
        $imageName = $name . '.' . $image->getClientOriginalExtension();
        $image->move(public_path($path), $imageName);
        return $path.'/'.$imageName;
    }
}
