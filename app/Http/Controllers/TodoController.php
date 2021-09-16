<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::all()->toArray();
        return array_reverse($todo);
    }

    public function store(Request $request){
        $todo = new Todo([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);
        $todo->save();

        return response()->json('Todo created successfully!');
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        return response()->json($todo);
    }

    public function update($id, Request $request)
    {
        $todo = Todo::find($id);
        $todo->update($request->all());

        return response()->json('Todo data updated successfully!');
    }

    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return response()->json('Todo deleted successfully!');
    }
}
