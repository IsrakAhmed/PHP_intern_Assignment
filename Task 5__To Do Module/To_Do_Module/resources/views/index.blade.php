@extends('layouts.app')

@section('content')

    <div class = "container">

        <h1 style="text-align: center; margin-top: 1em;"> To-Do List </h1>

        @if ($message = Session::get('success'))

            <!-- If the task is successfully added, updated or deleted, then display the message -->
            <div class = "alert alert-success">
                {{ $message }}
            </div>

        @endif

        <!-- Add New Task Button : Redirects to the create page -->
        <a href = "{{ route('create') }}" class = "btn btn-primary" style="margin-top: 1em; float: right; margin-bottom: 1em;">Add New Task</a>

        <!-- Table to display the tasks -->
        <table class = "table">

            <thead>
            <tr>
                <th> ID </th>
                <th> Title </th>
                <th> Description </th>
                <th> Done </th>
                <th> Created At </th>
                <th> Updated At </th>
                <th> Actions </th>
            </tr>
            </thead>

            <tbody>
            @foreach ($todos as $todo)

                <tr>
                    <td>{{ $todo -> id }}</td>
                    <td>{{ $todo -> title }}</td>
                    <td>{{ $todo -> description }}</td>
                    <td>{{ $todo -> done ? 'Yes' : 'No' }}</td>
                    <td>{{ $todo -> created_at -> format('F j, Y, g:i a') }}</td>
                    <td>{{ $todo -> updated_at -> format('F j, Y, g:i a') }}</td>

                    <td>
                        <a href = "{{ route('edit', ['id' => $todo -> id]) }}" class = "btn btn-warning"> Edit </a>

                        <form action = "{{ route('delete', ['id' => $todo -> id]) }}" method = "POST" style = "display : inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type = "submit" class = "btn btn-danger"> Delete </button>
                        </form>

                    </td>
                </tr>

            @endforeach
            </tbody>

        </table>
    </div>

@endsection
