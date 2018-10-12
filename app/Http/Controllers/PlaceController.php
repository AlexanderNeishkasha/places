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
    {
        $place = Place::create($request->only(['name', 'type']));
        return redirect("/places/{$place->id}");
    }

    public function showAll()
    {
        $places = Place::join('types', 'places.type', '=', 'types.id')
            ->select('places.*', 'types.name as type_name')
            ->orderByDesc('created_at')->get();
        return view('show_places', ['places' => $places]);
    }

    public function show($id)
    {
        $place = Place::join('types', 'places.type', '=', 'types.id')
            ->select('places.*', 'types.name as type_name')
            ->where('places.id', $id)->first();
        return view('place', ['place' => $place]);
    }
}