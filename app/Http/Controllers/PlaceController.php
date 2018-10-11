<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PlaceCreate;
use App\Models\Place;
use App\Models\Type;

class PlaceController extends Controller
{
    public function showForm()
    {
        $types = Type::all();
        return view('create_places', ['types' => $types]);
    }

    public function create(PlaceCreate $request)
    {;
        Place::create($request->only(['name', 'type']));
        return redirect('/places/create');
    }
}