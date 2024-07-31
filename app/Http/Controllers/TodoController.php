<?php

// app/Http/Controllers/TodoController.php
namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
        /*compact('todos') creates an associative array where the key is 'todos'
         Without compact, you would have to manually create an associative array like this:
        return view('todos.index', ['todos' => $todos]); */
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        Todo::create($request->only(['title', 'description']));

        return redirect()->route('todos.index');
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        $todo->update($request->all());

        return redirect()->route('todos.index') ->with('success', 'Todo updated successfully.');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index') ->with('success', 'Todo deleted successfully.');
    }
}

