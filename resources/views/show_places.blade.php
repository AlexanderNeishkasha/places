@extends('layout.master')

@section('title', 'All places')

@section('content')
    <ul class="collection place_collection">
        @forelse ($places as $place)
            <li class="collection-item place_item">
                <div class="place_name">
                    <a href="/places/{{ $place->id }}">{{ $place->name }}</a>
                </div>
                <div class="place_type">{{ $place->type_name }}</div>
            </li>
        @empty
            <li class="collection-item place_item">
                <div class="place_error">
                    No places added yet
                </div>
            </li>
        @endforelse
    </ul>
@endsection