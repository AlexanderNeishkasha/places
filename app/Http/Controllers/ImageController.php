<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageAdd;
use Illuminate\Support\Facades\Storage;
use App\Models\Place;
use App\Models\Image;

class ImageController extends Controller
{
    public function add(ImageAdd $request)
    {
        $image = [];
        $image['path'] = $request->file('photo')
            ->store("photo/{$request->place}", 'public');
        $image['place_id'] = $request->place;
        Image::create($image);
        return redirect("/places/{$image['place_id']}");
    }

    public function showForm($id)
    {
        $current = Place::findOrFail($id);
        $places = Place::all();
        return view('image_form', [
            'places' => $places,
            'current' => $current->id
        ]);
    }
}
