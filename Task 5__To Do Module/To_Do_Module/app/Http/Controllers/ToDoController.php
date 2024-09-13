<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index() {

        // Get all tasks and return index page

        $todos = ToDo::all();   // Gets all tasks from the todos table

        return view('index', compact('todos'));

    }

    public function create() {

        // Return create page

        return view('create');

    }

    public function store(Request $request) {

        // Store new task with the information provided from the create page

        $request -> validate([
            'title' => 'required|max:255',  // Title is required and must be a maximum of 255 characters
        ]);

        ToDo::create($request -> all());    // Creates a new task with the information provided

        return redirect() -> route('index') -> with('success', 'New Task created successfully.');

    }

    public function edit(Request $request) {

        // Get the task with the id provided to edit and return the edit page

        $id = $request -> query('id');  // Get the id of the task to edit

        $todo = ToDo::find($id);    // Find the task with the id provided

        return view('edit', compact('todo'));

    }

    public function update(Request $request) {

        // Update the task with the information provided from the edit page

        $id = $request -> query('id');  // Get the id of the task to update

        $todo = ToDo::find($id);    // Find the task with the id provided

        $done = $request->has('done') ? true : false;   // If the done checkbox is checked, set done to true, else set it to false

        $request -> validate([
            'title' => 'required|max:255',  // Title is required and must be a maximum of 255 characters
        ]);

        // Update the task with the information provided
        $todo -> update([
            'title' => $request -> title,
            'description' => $request -> description,
            'done' => $done,
        ]);

        return redirect() -> route('index') -> with('success', 'Task updated successfully.');

    }

    public function delete(Request $request) {

        // Delete the task with the id provided

        $id = $request->query('id');    // Get the id of the task to delete

        $todo = ToDo::find($id);    // Find the task with the id provided

        $todo -> delete();  // Delete the task

        return redirect() -> route('index') -> with('success', 'Task deleted successfully.');

    }
}
