@extends('layouts.app')

@section('content')

    <div class = "container">

        <h1 style="margin-top: 1em; text-align: center;"> Edit Task </h1>

        <!-- Form to edit a task : Title, Description, Done -> Redirects to update route -> Redirects to index route -->
        <form action = "{{ route('update', ['id' => $todo->id]) }}" method = "POST">

            @csrf
            @method('PUT')

            <div class = "form-group" style="margin-top: 1em;">

                <label for = "title"> Title </label>
                <input type = "text" class = "form-control" id = "title" name = "title" value = "{{ $todo -> title }}">

                @if ($errors->has('title'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('title') }}
                    </div>
                @endif

            </div>

            <div class = "form-group" style="margin-top: 1em;">

                <label for = "description"> Description </label>
                <textarea class = "form-control" id = "description" name = "description"> {{ $todo -> description }} </textarea>

            </div>

            <div class = "form-group" style="margin-top: 1em;">

                <label for = "done"> Done </label>
                <input type = "checkbox" id = "done" name = "done" {{ $todo -> done ? 'checked' : '' }}>

            </div>

            <button type = "submit" class = "btn btn-primary" style="margin-top: 1em;"> Update </button>

        </form>

    </div>

@endsection
