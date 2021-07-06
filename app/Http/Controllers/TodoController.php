<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        //Get todo list
        $todos= Todo::paginate(4);
        return view('todoList',compact('todos'));
    }

    //Save Task Data
    public function saveTask(){
        $this->validate(request(),[
            'name' =>'required|min:4',
            'task' =>'required|min:6',
        ]);

        Todo::create([
            'name'=> request('name'),
            'task'=> request('task'),
        ]);

        return redirect()->back()->with('success','Task created.....');
    }

}
