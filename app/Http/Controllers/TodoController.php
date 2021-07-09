<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index(){
        //Get todo list

        $todos= Todo::where('user_id',Auth::id())->paginate(4);
       /* $todos= User::find(Auth::id())->todos;
        This is alternative way of the where condition paginate*/
        return view('todoList',compact('todos'));
    }

    //Save Task Data
    public function saveTask(){
        $this->validate(request(),[
            'name' =>'required|min:4',
            'task' =>'required|min:6',
        ]);
        $user=User::find(Auth::id());

        $user->todos(); //Create korar somoy first bracket deya lage, fatch korar somoy lagey na

        $user->todos()->create([
            'name'=> request('name'),
            'task'=> request('task'),

        ]);
        return redirect()->back()->with('success','Task created.....');
    }

    //Change status of Task
    public function changeStatus($id, $status){
        if($id !=null && $status !=null){
            $todo=Todo::find($id); //find= {select * from table_name where id=$id
            if ($todo->user_id==Auth::id()){
                $todo->update([
                    'status'=>$status

                ]);
                return redirect()->back();
            }else{
                return 'Unauthorised';
            }

        }else{
            return 'Something wrong with change status function';
        }
    }

    //Show edit
    public function editShow($id){
        $task= Todo::find($id);

        if ($task->user_id == Auth::id()){
            return view('edit',compact('task'));
        }else{
            return 'Unauthorised';
        }


    }

    //Save Edit
    public function editSave($id){
        $this->validate(request(),[
            'name' =>'required|min:4',
            'task' =>'required|min:6',
        ]);
        $task= Todo::find($id);

        $task->update([
            'name'=>\request('name'),
            'task'=>\request('task'),

        ]);
        return redirect()->route('todoList')->with('success','Edited Success!!');

    }
    public function delete($id){
        $todo= Todo::find($id);

        if ($todo->user_id==Auth::id()){
            $todo->delete();
            return redirect()->route('todoList')->with('success','Data Deleted!!');
        }else{
            return 'Unauthorised';
        }
        
    }

}
