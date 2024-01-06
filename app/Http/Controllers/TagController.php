<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    function create(Request $request){
        Tag::create($request->all());
        return response()->json(["status"=>"ok","mesage"=>"Tag succesfully added"]);
    }

    function index(request $request){
        $tags = Tag::all();
        return response()->json(["status"=>"ok","data"=>$tags]); 
    }
    function show($id){
        $tags = Tag::find($id);
        return response()->json(["status"=>"ok","data"=>$tags]);
    }
}
