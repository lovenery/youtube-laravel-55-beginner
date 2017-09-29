<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        // dd($todos);

        return view('todo.index', [
            'todos' => $todos
        ]);
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3'
        ]);
        $todo = Todo::create($validated);
        return redirect('todo');
        // $todo = new Todo();
        // $todo->title = $request->title;
        // $todo->save();

        // $todo = Todo::create([
        //     'title' => $request->title,
        // ]);

    }
    public function destroy(Request $request, Todo $todo)
    {
        $todo->delete();
        return redirect('todo');
    }
}
