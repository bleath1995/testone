<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return view('todo.index');
    }
    public function update(Request $request)
    {
        $todo = new Todo();
        $todo->title = $request->tltle;
        $todo->save();

        return $todo;
    }
}
