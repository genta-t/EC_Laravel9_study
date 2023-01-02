<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Image;

class ImageService
{
    public static function upload($imageFile, $folderName)
    {
        if (!is_null($imageFile) && $imageFile->isValid()) {
            $fileName = uniqid(rand() . '_');
            $extension = $imageFile->extension();
            $fileNameToStore = $fileName . '.' . $extension;
            $resizedImage = Image::make($imageFile)->resize(1920, 1080)->encode();
            
            Storage::put('public/' . $folderName . '/' . $fileNameToStore, $resizedImage);
            return $fileNameToStore;
        }
    }
}