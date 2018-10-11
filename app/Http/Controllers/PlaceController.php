<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlaceCreate;
use App\Models\Place;

class PlaceController extends Controller
{
    public function create(PlaceCreate $request)
    {
        Place::create($request->only(['name', 'type']));
        return view('create_places');
    }
}