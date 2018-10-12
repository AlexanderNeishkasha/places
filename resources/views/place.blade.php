@extends('layout.master')

@section('title', $place->name)

@section('content')
    <div class="placepage">
        <h1 class="placepage_name">{{ $place->name }}</h1>
        <div class="placepage_type">{{ $place->type_name }}</div>
        <div class="carousel carousel-slider center placepage_slider">
            <div class="carousel-item red white-text" href="#one!">

            </div>
            <div class="carousel-item amber white-text" href="#two!">

            </div>
            <div class="carousel-item green white-text" href="#three!">

            </div>
            <div class="carousel-item blue white-text" href="#four!">

            </div>
        </div>
    </div>
@endsection