@extends('layout.master')

@section('title', 'Create Place')

@section('content')
    <div class="row">
        <form action="/places/create" class="create" method="post">
            @csrf
            <div class="input-field">
                <input type="text" id="create_name" name="name" class="create_text">
                <label for="create_name">Name</label>
                @if ($errors->has('name'))
                    <span class="helper-text error-message" data-error="wrong">
                        {{ $errors->first('name') }}
                    </span>
                @endif
            </div>

            <div class="input-field">
                <select name="type">
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                <label>Select type</label>
                @if ($errors->has('type'))
                    <span class="helper-text error-message" data-error="wrong">
                        {{ $errors->first('type') }}
                    </span>
                @endif
            </div>

            <button class="btn waves-effect waves-light blue darken-2" type="submit" name="action">
                Create
            </button>
        </form>
    </div>
@endsection