@extends('layout.master')

@section('title', $place->name)

@section('content')
    <div class="placepage">
        <h1 class="placepage_name">{{ $place->name }}</h1>
        <div class="placepage_info">
            <div class="placepage_type">{{ $place->type_name }}</div>
            <a href="/places/{{ $place->id }}/photos/add"
               class="waves-effect waves-light btn">Upload photo</a>
        </div>
        @if(count($images) > 0)
            <div class="carousel carousel-slider center placepage_slider">
                @foreach ($images as $image)
                    <div class="carousel-item blue">
                        <img src="{{ url('storage/'.$image->path) }}" alt="{{ $place->name }}"
                             class="placepage_img">
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection