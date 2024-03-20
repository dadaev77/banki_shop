<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImagController extends Controller
{
    public function getAllImages()
    {
        $images = Image::all();
        return response()->json($images);
    }

    public function getImageById($id)
    {
        $image = Image::find($id);
        if (!$image) {
            return response()->json(['error' => 'Изображение не найдено'], 404);
        }
        return response()->json($image);
    }
}
