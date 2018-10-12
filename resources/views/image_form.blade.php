@extends('layout.master')

@section('title', 'Add photo')

@section('content')
    <div class="row">
        <form action="/places/photos/add"
              class="create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="file-field input-field">
                <div class="btn">
                    <span>Photo</span>
                    <input type="file" name="photo">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
                @if ($errors->has('photo'))
                    <span class="helper-text error-message" data-error="wrong">
                        {{ $errors->first('photo') }}
                    </span>
                @endif
            </div>

            <div class="input-field">
                <select name="place">
                    @foreach($places as $place)
                        <option value="{{ $place->id }}"
                                @if ($place->id == $current) selected @endif
                        >{{ $place->name }}</option>
                    @endforeach
                </select>
                <label>Select place</label>
                @if ($errors->has('place'))
                    <span class="helper-text error-message" data-error="wrong">
                        {{ $errors->first('place') }}
                    </span>
                @endif
            </div>

            <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">
                Add photo
            </button>
        </form>
    </div>
@endsection