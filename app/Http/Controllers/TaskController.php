<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Todo::all();
    }
    public function show()
    {
        return view('Master.Task.view');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:todos|max:255',
        ]);

        $task = Todo::create([
            'title' => $request->title,
            'completed' => false,
        ]);

        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $task = Todo::findOrFail($id);


        $task->update([
            'completed' => !$task->completed,
        ]);

        return response()->json($task, 200);
    }


    public function destroy($id)
    {
        $task = Todo::findOrFail($id);
        $task->delete();

        return response()->json(null, 200);
    }
}
