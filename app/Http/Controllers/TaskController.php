<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    //

    function store(Request $request){
        $newTask=Task::create($request->all());
        $newTask->tags()->attach($request->tags);
        return response()->json(["status"=>"ok","message"=>"Succesfully created"]);
    }

    function index(){
        $tasks = Task::all();
        return response()->json(["status"=>"ok","data"=>$tasks]);

    }
    // function show($id){
    //     $task = Task::with('tags')find($id);
    //     return response()->json(["status"=>"ok","data"=>$task]);
    // }
    function update(Request $request,$id){
        $task= Task::find($id);
        $task->update($request->all());
        return response()->json(["status"=>"ok", "data"=>$task]);
    }
    function delete($id){
        $task = Task::find($id);
        $task->delete();
        return response()->json(["status"=>"ok", "message"=>"Deleted Successfully"]);
    }

    //tag


}