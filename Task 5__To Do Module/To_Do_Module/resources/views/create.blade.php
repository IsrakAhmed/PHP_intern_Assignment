@extends('layouts.app')

@section('content')

    <div class = "container">

        <h1 style="text-align: center; margin-top: 1em;"> Add New Task </h1>

        <!-- Form to add new task : Title and Description -> Redirects to store route -> Redirects to index route -->
        <form action = "{{ route('store') }}" method = "POST">

            @csrf

            <div class = "form-group" style="margin-top: 1em;">

                <label for = "title"> Title </label>
                <input type = "text" class = "form-control" id = "title" name = "title">

                @if ($errors->has('title'))
                    <div class="text-danger mt-2">
                        {{ $errors->first('title') }}
                    </div>
                @endif

            </div>

            <div class = "form-group" style="margin-top: 1em;">

                <label for = "description"> Description </label>
                <textarea class = "form-control" id = "description" name = "description"></textarea>

            </div>

            <button type = "submit" class = "btn btn-primary" style="margin-top: 1em;"> Submit </button>

        </form>

    </div>

@endsection
