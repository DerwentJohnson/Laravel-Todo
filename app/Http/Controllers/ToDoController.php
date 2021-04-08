<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index(Request $request)
    {
        return view('todos.todo');
    }
}
