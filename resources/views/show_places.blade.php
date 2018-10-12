@extends('layout.master')

@section('title', 'All places')

@section('content')
    <ul class="collection place_collection">
        @foreach ($places as $place)
            <li class="collection-item place_item">
                <div class="place_name">
                    <a href="/places/{{ $place->id }}">{{ $place->name }}</a>
                </div>
                <div class="place_type">{{ $place->type_name }}</div>
            </li>
        @endforeach
    </ul>
@endsection